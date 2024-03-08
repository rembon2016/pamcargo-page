<?php

declare(strict_types=1);

use App\Http\Controllers\Adm\DashboardController;
use App\Http\Controllers\Adm\General\About\MissionController;
use App\Http\Controllers\Adm\General\About\ObjectiveController;
use App\Http\Controllers\Adm\General\About\OurTeamController;
use App\Http\Controllers\Adm\General\About\OverviewController;
use App\Http\Controllers\Adm\General\About\VisionController;
use App\Http\Controllers\Adm\General\Services\LandAirServiceController;
use App\Http\Controllers\Adm\General\Services\SeaAirServiceController;
use App\Http\Controllers\Adm\General\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Adm routes
|--------------------------------------------------------------------------
|
| Here is where you can register adm routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])
        ->name('index');

    // General
    Route::group(['prefix' => 'general', 'as' => 'general.'], function () {

        // Slider
        Route::group(['prefix' => 'slider', 'as' => 'slider.'], function () {
            Route::get('/', [SliderController::class, 'index'])
                ->name('index');
            Route::get('/create', [SliderController::class, 'create'])
                ->name('create');
        });

        // About
        Route::group(['prefix' => 'about', 'as' => 'about.'], function () {

            // Overview
            Route::get('/overview', [OverviewController::class, 'index'])
                ->name('overview.index');

            // Objective
            Route::get('/objective', [ObjectiveController::class, 'index'])
                ->name('objective.index');

            // Vision
            Route::get('/vision', [VisionController::class, 'index'])
                ->name('vision.index');

            // Mission
            Route::get('/mission', [MissionController::class, 'index'])
                ->name('mission.index');

            // Our Team
            Route::get('/ourteam', [OurTeamController::class, 'index'])
                ->name('ourteam.index');

        });

        // Services
        Route::group(['prefix' => 'service', 'as' => 'service.'], function () {

            // Sea Air
            Route::get('/sea-air', [SeaAirServiceController::class, 'index'])
                ->name('sea.index');

            // Land Air
            Route::get('/land-air', [LandAirServiceController::class, 'index'])
                ->name('land.index');

        });

    });

});
