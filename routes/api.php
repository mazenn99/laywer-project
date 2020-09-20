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
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('article', 'Admin\ArticleController@index');
    Route::get('article/{id}', 'Admin\ArticleController@find');
    Route::post('article', 'Admin\ArticleController@store');
});

