<?php

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

Route::get('homepage/url','VideosController@index');
Route::get('upload/files','VideosController@view_upload_page');
Route::post('upload/video','VideosController@upload');
Route::get('homepage/url','VideosController@index');
Route::get('user/controls','VideosController@user_controls');
Route::get('delete/video{path}','VideosController@destroy');
