<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\Base\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])
    ->middleware(['visitor'])
    ->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/rate-request', [PageController::class, 'rateRequest'])->name('rate-request');
Route::get('/imprint', [PageController::class, 'imprint'])->name('imprint');
Route::get('/news', [PageController::class, 'news'])->name('news.index');
Route::get('/news/detail', [PageController::class, 'newsDetail'])->name('news.detail');
Route::get('/office', [PageController::class, 'office'])->name('office');

// Services Route
Route::get('/sea-air-service', [PageController::class, 'seaAir'])->name('sea-air');
Route::get('/land-air-service', [PageController::class, 'landAir'])->name('land-air');

// Other Route
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');

// Admin Routes
require __DIR__ . '/adm.php';
