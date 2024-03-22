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

    public function about()
    {
        return view('landing-page.pages.about');
    }

    public function seaAir()
    {
        return view('landing-page.pages.services.sea-air');
    }

    public function landAir()
    {
        return view('landing-page.pages.services.land-air');
    }

    public function contact()
    {
        return view('landing-page.pages.contact');
    }

    public function rateRequest()
    {
        return view('landing-page.pages.rate-request');
    }

    public function imprint()
    {
        return view('landing-page.pages.imprint');
    }

    public function faq()
    {
        return view('landing-page.pages.faq');
    }

    public function privacyPolicy()
    {
        return view('landing-page.pages.privacy-policy');
    }

    public function news()
    {
        return view('landing-page.pages.news.index');
    }

    public function newsDetail()
    {
        return view('landing-page.pages.news.detail');
    }
}
