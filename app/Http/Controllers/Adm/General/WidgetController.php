<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('adm.general.widget.index');
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

        return view('adm.general.widget.form', [
            'actions' => $actions,
        ]);
    }
}
