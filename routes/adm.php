<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adm\DashboardController;
use App\Http\Controllers\Adm\Auth\LoginController;
use App\Http\Controllers\Adm\Auth\LogoutController;
use App\Http\Controllers\Adm\General\SliderController;
use App\Http\Controllers\Adm\General\WidgetController;
use App\Http\Controllers\Adm\General\ImprintController;
use App\Http\Controllers\Adm\General\EmailCarbonController;
use App\Http\Controllers\Adm\UserActivities\NewsController;
use App\Http\Controllers\Adm\UserActivities\UserController;
use App\Http\Controllers\Adm\General\About\VisionController;
use App\Http\Controllers\Adm\Monitoring\SystemLogController;
use App\Http\Controllers\Adm\UserActivities\AgentController;
use App\Http\Controllers\Adm\General\About\MissionController;
use App\Http\Controllers\Adm\General\About\OurTeamController;
use App\Http\Controllers\Adm\General\PrivacyPolicyController;
use App\Http\Controllers\Adm\Monitoring\VisitorLogController;
use App\Http\Controllers\Adm\UserActivities\OfficeController;
use App\Http\Controllers\Adm\General\About\OverviewController;
use App\Http\Controllers\Adm\General\About\ObjectiveController;
use App\Http\Controllers\Adm\UserActivities\ContinentController;
use App\Http\Controllers\Adm\UserActivities\RateRequestController;
use App\Http\Controllers\Adm\General\Contact\FooterContactController;
use App\Http\Controllers\Adm\General\Contact\ContentContactController;
use App\Http\Controllers\Adm\General\Services\SeaAirServiceController;
use App\Http\Controllers\Adm\UserActivities\CustomerMessageController;
use App\Http\Controllers\Adm\General\Services\LandAirServiceController;

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

// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])
        ->name('index');

    // Monitoring
    Route::group(['prefix' => 'monitoring', 'as' => 'monitoring.'], function () {

        // Visitor Log
        Route::group(['prefix' => 'visitor', 'as' => 'visitor.'], function () {
            Route::get('/', [VisitorLogController::class, 'index'])
                ->name('index');
        });

        // System Log
        Route::group(['prefix' => 'system', 'as' => 'system.'], function () {
            Route::get('/', [SystemLogController::class, 'index'])
                ->name('index');
        });

    });

    // General
    Route::group(['prefix' => 'general', 'as' => 'general.'], function () {

        // Slider
        Route::group(['prefix' => 'slider', 'as' => 'slider.'], function () {
            Route::get('/', [SliderController::class, 'index'])
                ->name('index');
            Route::get('/create', [SliderController::class, 'create'])
                ->name('create');
            Route::post('/store', [SliderController::class, 'store'])
                ->name('store');
            Route::get('/{id}/edit', [SliderController::class, 'edit'])
                ->name('edit');
            Route::put('/{id}/update', [SliderController::class, 'update'])
                ->name('update');
            Route::get('/{id}/set-status', [SliderController::class, 'setUsageStatus'])
                ->name('set_usage_status');
            Route::delete('/{id}/delete', [SliderController::class, 'delete'])
                ->name('delete');
        });

        // About
        Route::group(['prefix' => 'about', 'as' => 'about.'], function () {

            // Overview
            Route::get('/overview', [OverviewController::class, 'index'])
                ->name('overview.index');
            Route::post('/overview', [OverviewController::class, 'createOrUpdate'])
                ->name('overview.save');

            // Objective
            Route::get('/objective', [ObjectiveController::class, 'index'])
                ->name('objective.index');
            Route::post('/objective', [ObjectiveController::class, 'createOrUpdate'])
                ->name('objective.save');

            // Vision
            Route::get('/vision', [VisionController::class, 'index'])
                ->name('vision.index');
            Route::post('/vision', [VisionController::class, 'createOrUpdate'])
                ->name('vision.save');

            // Mission
            Route::get('/mission', [MissionController::class, 'index'])
                ->name('mission.index');
            Route::post('/mission', [MissionController::class, 'createOrUpdate'])
                ->name('mission.save');

            // Our Team
            Route::get('/ourteam', [OurTeamController::class, 'index'])
                ->name('ourteam.index');
            Route::post('/ourteam', [OurTeamController::class, 'createOrUpdate'])
                ->name('ourteam.save');

        });

        // Services
        Route::group(['prefix' => 'service', 'as' => 'service.'], function () {

            // Sea Air
            Route::get('/sea-air', [SeaAirServiceController::class, 'index'])
                ->name('sea.index');
            Route::post('/sea-air', [SeaAirServiceController::class, 'createOrUpdate'])
                ->name('sea.save');

            // Land Air
            Route::get('/land-air', [LandAirServiceController::class, 'index'])
                ->name('land.index');
            Route::post('/land-air', [LandAirServiceController::class, 'createOrUpdate'])
                ->name('land.save');

        });

        // Email Carbon
        Route::group(['prefix' => 'email-carbon', 'as' => 'email_carbon.'], function () {
            Route::get('/', [EmailCarbonController::class, 'index'])
                ->name('index');
            Route::get('/create', [EmailCarbonController::class, 'create'])
                ->name('create');
            Route::post('/store', [EmailCarbonController::class, 'store'])
                ->name('store');
            Route::get('/{id}/edit', [EmailCarbonController::class, 'edit'])
                ->name('edit');
            Route::put('/{id}/update', [EmailCarbonController::class, 'update'])
                ->name('update');
            Route::delete('/{id}/delete', [EmailCarbonController::class, 'delete'])
                ->name('delete');
        });

        // Contacts
        Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {

            // Content Contact
            Route::group(['prefix' => 'content', 'as' => 'content.'], function () {
                Route::get('/', [ContentContactController::class, 'index'])
                    ->name('index');
                Route::get('/create', [ContentContactController::class, 'create'])
                    ->name('create');
                Route::post('/store', [ContentContactController::class, 'store'])
                    ->name('store');
                Route::get('/{id}/edit', [ContentContactController::class, 'edit'])
                    ->name('edit');
                Route::put('/{id}/update', [ContentContactController::class, 'update'])
                    ->name('update');
                Route::delete('/{id}/delete', [ContentContactController::class, 'delete'])
                    ->name('delete');
            });

            // Footer Contact
            Route::group(['prefix' => 'footer', 'as' => 'footer.'], function () {
                Route::get('/', [FooterContactController::class, 'index'])
                    ->name('index');
                Route::get('/create', [FooterContactController::class, 'create'])
                    ->name('create');
                Route::post('/store', [FooterContactController::class, 'store'])
                    ->name('store');
                Route::get('/{id}/edit', [FooterContactController::class, 'edit'])
                    ->name('edit');
                Route::put('/{id}/update', [FooterContactController::class, 'update'])
                    ->name('update');
                Route::delete('/{id}/delete', [FooterContactController::class, 'delete'])
                    ->name('delete');
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

        // Rate Request
        Route::group(['prefix' => 'rate-request', 'as' => 'rate_request.'], function () {
            Route::get('/', [RateRequestController::class, 'index'])
                ->name('index');
        });

        // Continent
        Route::group(['prefix' => 'continent', 'as' => 'continent.'], function () {
            Route::get('/', [ContinentController::class, 'index'])
                ->name('index');
            Route::get('/create', [ContinentController::class, 'create'])
                ->name('create');
        });

        // Continent
        Route::group(['prefix' => 'customer-message', 'as' => 'customer_message.'], function () {
            Route::get('/', [CustomerMessageController::class, 'index'])
                ->name('index');
        });

    });

});

// Auth
Route::group(['prefix' => 'auth', 'as' => 'auth.', 'middleware' => ['guest']], function () {

    // Login
    Route::get('/login', [LoginController::class, 'index'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])
        ->name('authenticate');

    // Logout
    Route::get('/logout', [LogoutController::class, 'logout'])
        ->withoutMiddleware(['guest'])
        ->middleware(['auth'])
        ->name('logout');

});
