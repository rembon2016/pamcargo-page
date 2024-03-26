<?php

declare(strict_types=1);

namespace App\Http\Controllers\LandingPage\Base;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
    /**
     * @return View
     */
    public function home(): View
    {
        $sliders = Slider::latest()->get();
        return view(
            'landing-page.pages.home',
            compact('sliders')
        );
    }

    /**
     * @return View
     */
    public function about(): View
    {
        return view('landing-page.pages.about');
    }

    /**
     * @return View
     */
    public function seaAir(): View
    {
        return view('landing-page.pages.services.sea-air');
    }

    /**
     * @return View
     */
    public function landAir(): View
    {
        return view('landing-page.pages.services.land-air');
    }

    /**
     * @return View
     */
    public function contact(): View
    {
        return view('landing-page.pages.contact');
    }

    /**
     * @return View
     */
    public function rateRequest(): View
    {
        return view('landing-page.pages.rate-request');
    }

    /**
     * @return View
     */
    public function imprint(): View
    {
        return view('landing-page.pages.imprint');
    }

    /**
     * @return View
     */
    public function faq(): View
    {
        return view('landing-page.pages.faq');
    }

    /**
     * @return View
     */
    public function privacyPolicy(): View
    {
        return view('landing-page.pages.privacy-policy');
    }

    /**
     * @return View
     */
    public function news(): View
    {
        return view('landing-page.pages.news.index');
    }

    /**
     * @return View
     */
    public function newsDetail(): View
    {
        return view('landing-page.pages.news.detail');
    }
}
