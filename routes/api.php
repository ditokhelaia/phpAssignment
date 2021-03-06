<?php

use Illuminate\Http\Request;

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

Route::get('/articles', 'ArticleController@index');
Route::get('/article/{id}', 'ArticleController@show');
Route::get('/article/{id}/comments', 'CommentController@index');
Route::get('/tags', 'TagController@index');
Route::get('/tags/{id}/articles', 'TagController@show');

