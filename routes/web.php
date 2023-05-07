<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Company\HomeController;
use App\Http\Controllers\Company\AboutController;
use App\Http\Controllers\Company\ContactController;
use App\Http\Controllers\Company\PricingController;
use App\Http\Controllers\Company\AgenListController;
use App\Http\Controllers\Company\ServicesController;
use App\Http\Controllers\DeliveryManagementController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

/**
 * Route Ini Digunakan Untuk Company Profile Dan Tracking
 */
Route::resource('/', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/agen-list', AgenListController::class);
Route::resource('/services', ServicesController::class);
Route::resource('/pricing', PricingController::class);
// Route::resource('/tracking', PricingController::class);
Route::get('/tracking', function () {
    return view('company.tracking');
});
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send-message', [ContactController::class, 'sendToEmail'])->name('send.message');


Auth::routes();
// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    /**
     * Route Ini Adalah Inti Dari Aplikasi Ini
     */

    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/delivery-management', DeliveryManagementController::class);
});
