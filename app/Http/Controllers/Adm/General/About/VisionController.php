<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\About;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => '',
            'method' => '',
            'act' => 'Submit',
        ];

        return view('adm.general.about.vision', [
            'actions' => $actions,
        ]);
    }
}
