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
Route::view('user','Adduser');
Route::post('user','App\Http\Controllers\userController@Adduser');
Route::get('show','App\Http\Controllers\userController@showUser');
Route::get('delete/{id}','App\Http\Controllers\userController@Delete');
Route::get('edit/{id}','App\Http\Controllers\userController@editShow');
Route::post('edit','App\Http\Controllers\userController@update');