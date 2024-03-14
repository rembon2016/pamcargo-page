<?php

declare(strict_types=1);

use App\Http\Controllers\Adm\DashboardController;
use App\Http\Controllers\Adm\General\About\MissionController;
use App\Http\Controllers\Adm\General\About\ObjectiveController;
use App\Http\Controllers\Adm\General\About\OurTeamController;
use App\Http\Controllers\Adm\General\About\OverviewController;
use App\Http\Controllers\Adm\General\About\VisionController;
use App\Http\Controllers\Adm\General\Contact\ContentContactController;
use App\Http\Controllers\Adm\General\Contact\FooterContactController;
use App\Http\Controllers\Adm\General\EmailCarbonController;
use App\Http\Controllers\Adm\General\ImprintController;
use App\Http\Controllers\Adm\General\PrivacyPolicyController;
use App\Http\Controllers\Adm\General\Services\LandAirServiceController;
use App\Http\Controllers\Adm\General\Services\SeaAirServiceController;
use App\Http\Controllers\Adm\General\SliderController;
use App\Http\Controllers\Adm\General\WidgetController;
use App\Http\Controllers\Adm\UserActivities\AgentController;
use App\Http\Controllers\Adm\UserActivities\NewsController;
use App\Http\Controllers\Adm\UserActivities\OfficeController;
use App\Http\Controllers\Adm\UserActivities\UserController;
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

        // Email Carbon
        Route::group(['prefix' => 'email-carbon', 'as' => 'email_carbon.'], function () {
            Route::get('/', [EmailCarbonController::class, 'index'])
                ->name('index');
            Route::get('/create', [EmailCarbonController::class, 'create'])
                ->name('create');
        });

        // Contacts
        Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {

            // Content Contact
            Route::group(['prefix' => 'content', 'as' => 'content.'], function () {
                Route::get('/', [ContentContactController::class, 'index'])
                    ->name('index');
                Route::get('/create', [ContentContactController::class, 'create'])
                    ->name('create');
            });

            // Footer Contact
            Route::group(['prefix' => 'footer', 'as' => 'footer.'], function () {
                Route::get('/', [FooterContactController::class, 'index'])
                    ->name('index');
                Route::get('/create', [FooterContactController::class, 'create'])
                    ->name('create');
            });

        });

        // Privacy Policy
        Route::group(['prefix' => 'privacy-policy', 'as' => 'privacy_policy.'], function () {
            Route::get('/index', [PrivacyPolicyController::class, 'index'])
                ->name('index');
        });

        // Imprint
        Route::group(['prefix' => 'imprint', 'as' => 'imprint.'], function () {
            Route::get('/index', [ImprintController::class, 'index'])
                ->name('index');
        });

        // Widget Quick Access
        Route::group(['prefix' => 'widget', 'as' => 'widget.'], function () {
            Route::get('/index', [WidgetController::class, 'index'])
                ->name('index');
            Route::get('/create', [WidgetController::class, 'create'])
                ->name('create');
        });

    });

    // User Activities
    Route::group(['prefix' => 'ua', 'as' => 'ua.'], function () {

        // User
        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            Route::get('/', [UserController::class, 'index'])
                ->name('index');
            Route::get('/create', [UserController::class, 'create'])
                ->name('create');
        });

        // News
        Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
            Route::get('/', [NewsController::class, 'index'])
                ->name('index');
            Route::get('/create', [NewsController::class, 'create'])
                ->name('create');
        });

        // Office
        Route::group(['prefix' => 'office', 'as' => 'office.'], function () {
            Route::get('/', [OfficeController::class, 'index'])
                ->name('index');
            Route::get('/create', [OfficeController::class, 'create'])
                ->name('create');
        });

        // Agent
        Route::group(['prefix' => 'agent', 'as' => 'agent.'], function () {
            Route::get('/', [AgentController::class, 'index'])
                ->name('index');
            Route::get('/create', [AgentController::class, 'create'])
                ->name('create');
        });

    });

});
