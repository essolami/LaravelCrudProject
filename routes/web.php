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
    return view('main');
});

Route::get('index','ProductController@index');
Route::get('create','ProductController@create');

Route::post('store','ProductController@store');
Route::get('edit/{id}','ProductController@edit');
Route::post('update/{id}','ProductController@update');
Route::get('delete/{id}','ProductController@delete');
Route::get('show/{id}','ProductController@show');