<?php

declare(strict_types=1);

namespace App\Http\Controllers\LandingPage\Base;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('landing-page.pages.home');
    }
}
