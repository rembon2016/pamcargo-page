<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\UserActivities;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('adm.user-activities.agents.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => '',
            'method' => '',
            'act' => 'Submit',
        ];

        return view('adm.user-activities.agents.form', [
            'actions' => $actions,
        ]);
    }
}
