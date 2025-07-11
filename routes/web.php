<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// front routes
Route::name('front.')->group(function() {
    Route::view('/','front.index')->name('index');
    Route::view('/about','front.about')->name('about');
    Route::view('/service','front.service')->name('service');
    Route::view('/contact','front.contact')->name('contact');
});


// admin routes
Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])->group(function () {
    Route::middleware('auth')->group(function() {
        Route::view('/','admin.index')->name('index');
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services',ServiceController::class);
        });
    });
    Route::view('/login','admin.auth.login')->name('login');
    require __DIR__.'/auth.php';
});




