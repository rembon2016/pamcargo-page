<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        ];

        return view('adm.index', [
            'stats' => $stats,
        ]);
    }
}
