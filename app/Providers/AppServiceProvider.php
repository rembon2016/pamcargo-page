<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('assets', function ($expression) {
            $landingPagePrefix = 'assets/landing-page/';
            $expression = str_replace("'", "", $expression);
            $expression = str_replace('"', "", $expression);
            
            return asset($landingPagePrefix . $expression);
        });
    }
}
