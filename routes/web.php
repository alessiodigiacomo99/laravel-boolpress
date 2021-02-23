<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles_api', 'ArticleController@articles_api')->name('articles_api');
Route::get('categories_api', 'CategoryController@categories_api')->name('categories_api');
Route::get('tags_api', 'TagController@tags_api')->name('tags_api');