<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
use App\Models\Feature;
use App\Models\Message;
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
Route::name('front.')->controller(FrontController::class)->group(function() {
    Route::get('/','index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/service','service')->name('service');
    Route::get('/contact','contact')->name('contact');
    Route::post('/subscribe','subscribe')->name('subscribe');
});

// admin routes
Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])->group(function () {
    Route::middleware('auth')->group(function() {
        Route::view('/','admin.index')->name('index');

        // services
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services',ServiceController::class);
        });

        // features
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features',FeatureController::class);
        });

        // messages
        Route::controller(MessageController::class)->group(function () {
            Route::resource('messages',MessageController::class)->only(['index','show','destroy']);
        });

        // subscribers
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscribers',SubscriberController::class)->only(['index','destroy']);
        });

        // testmonials
        Route::controller(TestmonialController::class)->group(function () {
            Route::resource('testmonials',TestmonialController::class);
        });

        // settings
        Route::controller(SettingController::class)->group(function () {
            Route::resource('settings',SettingController::class)->only(['index','update']);
        });
    });
    Route::view('/login','admin.auth.login')->name('login');
    require __DIR__.'/auth.php';
});




