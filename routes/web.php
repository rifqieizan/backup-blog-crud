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

Route::get('/home', ['uses'=>'HomeController@index']);
Route::get('/homes', ['as'=>'homes','uses'=>'HomeController@homes']);
Route::get('/pages', ['as'=>'pages','uses'=>'HomeController@pages']);
Route::get('/about', ['as'=>'about','uses'=>'HomeController@about']);
Route::post('/create', ['as'=>'create','uses'=>'HomeController@create']);
Route::get('/edit/{id}', ['as'=>'edit','uses'=>'HomeController@edit']);
Route::post('/update/{id}', ['as'=>'update','uses'=>'HomeController@update']);
Route::post('/delete/', ['as'=>'delete','uses'=>'HomeController@delete']);
Route::get('/datatabel', ['as'=>'datatabel','uses'=>'HomeController@bookingData']);
Route::get('/', ['uses'=>'DosenController@index']);
