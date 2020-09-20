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
    Route::get('getArticles', 'ArticleController@index');
    Route::get('getArticle/{id}', 'ArticleController@show');
    // contact
    Route::post('contact', 'ContactController@store');
    // news
    Route::get('news', 'NewsController@index');
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth:api'], function () {
    Route::post('login', 'Admin\AuthController@login');
    Route::get('article', 'Admin\ArticleController@index');
    Route::get('article/{id}', 'Admin\ArticleController@find');
    Route::post('article', 'Admin\ArticleController@store');
    Route::get('atricleChangeStatus/{id}', 'Admin\ArticleController@changeStatus');
    // contact
    Route::get('contacts', 'Admin\ContactUsController@index');
    // news
    Route::get('news', 'Admin\NewsController@index');
    Route::post('news', 'Admin\NewsController@store');
    Route::put('news', 'Admin\NewsController@update');
});

