<?php

use App\Http\Controllers\Site\Visitor\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// site views
Route::group(['namespace' => 'Site\Visitor'], function () {
    Route::get('/' , [SiteController::class , 'index'])->name('home');
    Route::get('about' , [SiteController::class , 'about'])->name('about');
    Route::get('special' , [SiteController::class , 'special'])->name('special');
    Route::get('order' , [SiteController::class , 'order'])->name('order');
    Route::get('ask-consulting' , [SiteController::class , 'askConsulting'])->name('ask-consulting');
    Route::get('report' , [SiteController::class , 'report'])->name('report');
    Route::get('services' , [SiteController::class , 'services'])->name('services');
    Route::get('blogs' , [SiteController::class , 'blogs'])->name('blogs');
    Route::get('law-news' , [SiteController::class , 'lawNews'])->name('lawNews');
    Route::get('laws' , [SiteController::class , 'laws'])->name('laws');
    Route::get('our-services' , [SiteController::class , 'ourServices'])->name('our-services');
    Route::get('single-news/{id}' , [SiteController::class , 'singleNews'])->name('single-news');
    Route::get('facility-news' , [SiteController::class , 'facilityNews'])->name('facility-news');
    Route::post('sendEmail' , [SiteController::class , 'sendEmail'])->name('sendEmail');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
