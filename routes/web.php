<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'index')->name('index');
Route::view('/index-2', 'index-2');
Route::view('/index-3', 'index-3');
Route::view('/index-4', 'index-4');

Route::view('/services', 'services-1');
Route::view('/services-2', 'services-2');

// Admin Routes
require __DIR__ . '/adm.php';