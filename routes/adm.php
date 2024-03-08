<?php

declare(strict_types=1);

use App\Http\Controllers\Adm\DashboardController;
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

    Route::get('/', [DashboardController::class, 'index'])
        ->name('index');

    Route::group(['prefix' => 'general', 'as' => 'general.'], function () {

        Route::group(['prefix' => 'slider', 'as' => 'slider.'], function () {
            Route::get('/', [SliderController::class, 'index'])
                ->name('index');
            Route::get('/create', [SliderController::class, 'create'])
                ->name('create');
        });

    });

});
