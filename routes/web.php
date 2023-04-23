<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\HomeController;
use App\Http\Controllers\Company\AboutController;
use App\Http\Controllers\Company\PricingController;
use App\Http\Controllers\Company\ContactController;

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

// Route::get('/', function () {
//     return view('layouts.company.main');
// });

/**
 * Route Ini Digunakan Untuk Company Profile Dan Tracking
 */
Route::resource('/', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/pricing', PricingController::class);
Route::resource('/tracking', PricingController::class);
Route::resource('/contact', ContactHomeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
