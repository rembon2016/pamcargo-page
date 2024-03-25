<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm;

use App\Models\News;
use App\Models\User;
use App\Models\WebVisitor;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Office;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $stats = [
            'user_counter' => User::whereHas('role', fn ($q) => $q->where('name', '!=', 'admin'))->count(),
            'news_counter' => News::count(),
            'office_counter' => Office::count(),
            'agent_counter' => Agent::count(),
        ];

        $yearly_visitor_chart = array();

        foreach (WebVisitor::orderBy('created_at', 'asc')->get() as $visitor) {
            $yearly_visitor_chart[] = [
                'year' => $visitor->created_at->format('Y'),
                'month' => $visitor->created_at->format('M-Y'),
                'count' => WebVisitor::whereMonth('created_at', $visitor->created_at->format('m'))->count(),
            ];
        }

        $set_yearly_visitor_chart = collect($yearly_visitor_chart)
            ->unique()
            ->sortBy('year', SORT_NATURAL)
            ->take(12);

        return view('adm.index', [
            'stats' => $stats,
            'yearly_visitor_chart' => $set_yearly_visitor_chart->values()->all(),
        ]);
    }
}
