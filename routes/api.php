<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'site'], function () {
    Route::get('getArticles/{typeId}', 'Site\ArticleController@index');
    Route::get('getNews', 'Site\ArticleController@getNews');
    Route::get('getSystem', 'Site\ArticleController@getSystem');
    Route::get('getArticle/{id}', 'Site\ArticleController@show');
    // contact
    Route::post('contact', 'Site\ContactController@store');
    // news
    Route::get('news', 'Site\NewsController@index');
    Route::get('about', 'Site\AboutController@index');
    // Orders 
    Route::post('order', 'Site\OrderController@store');

    // Report
    Route::get('reports', 'Site\ReportController@index');
    // Download file
    Route::get('downlaodFile/{id}', 'Site\ReportController@downloadFile');
    // editPassword
    Route::post('editPassword', 'Site\AuthController@editPassword');
    // get service
    Route::get('services', 'Site\ServiceController@index');
    Route::get('service/{id}', 'Site\ServiceController@find');
    // specialties
    Route::get('specialties', 'Site\SpecialtiesController@index');
});


Route::post('admin/login', 'Admin\AuthController@login');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:api'], function () {
    Route::get('article', 'Admin\ArticleController@index');
    Route::get('article/{id}', 'Admin\ArticleController@find');
    Route::post('article', 'Admin\ArticleController@store');
    Route::put('article/{id}', 'Admin\ArticleController@update');
    Route::get('atricleChangeStatus/{id}', 'Admin\ArticleController@changeStatus');
    // contact
    Route::get('contacts', 'Admin\ContactUsController@index');
    Route::get('changeStatusContacts/{id}', 'Admin\ContactUsController@changeStatus');
    // news
    Route::get('news', 'Admin\NewsController@index');
    Route::get('newsChangeStatus/{id}', 'Admin\NewsController@changeStatus');
    Route::post('news', 'Admin\NewsController@store');
    Route::put('news/{id}', 'Admin\NewsController@update');
     // news
     Route::get('about', 'Admin\AboutController@index');
     Route::post('about', 'Admin\AboutController@store');
     Route::put('about/{id}', 'Admin\AboutController@update');
    // Type
    Route::get('types', 'Admin\TypeController@index');
    Route::get('orderTypes', 'Admin\TypeController@orderType');
    // orders
    Route::get('orders', 'Admin\OrderController@index');
    Route::get('ordersChangeStatus/{id}', 'Admin\OrderController@changeStatus');
    // Report
    Route::get('reports', 'Admin\ReportController@index');
    Route::get('reportsChangeStatus/{id}', 'Admin\ReportController@changeStatus');
    Route::post('reports', 'Admin\ReportController@store');
    Route::put('reports/{id}', 'Admin\ReportController@update');
    // Service
    Route::get('servie', 'Admin\ServiceController@index');
    Route::get('servieChangeStatus/{id}', 'Admin\ServiceController@changeStatus');
    Route::post('servie', 'Admin\ServiceController@store');
    Route::put('servie/{id}', 'Admin\ServiceController@update');
    // Service
    Route::get('specialties', 'Admin\SpecialtiesController@index');
    Route::get('specialtiesChangeStatus/{id}', 'Admin\SpecialtiesController@changeStatus');
    Route::post('specialties', 'Admin\SpecialtiesController@store');
    Route::put('specialties/{id}', 'Admin\SpecialtiesController@update');
    // Service
    Route::get('link', 'Admin\LinkController@index');
    Route::get('linkChangeStatus/{id}', 'Admin\LinkController@changeStatus');
    Route::post('link', 'Admin\LinkController@store');
    Route::put('link/{id}', 'Admin\LinkController@update');
});

