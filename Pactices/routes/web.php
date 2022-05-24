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

Route::get('hello/{name}/{id}','App\Http\Controllers\registerController@Hello');
Route::get('connect','App\Http\Controllers\dbconnection@connection');
Route::get('model','App\Http\Controllers\modelpactices@getdata');


/*This is Model Pactices Section*/
Route::get('inputpage','App\Http\Controllers\personController@getInputpage');
Route::post('teacher','App\Http\Controllers\personController@Addteacher');
Route::get('showteacher','App\Http\Controllers\personController@showTeacher');
Route::get('delete/{id}','App\Http\Controllers\personController@DeleteTeacher');
Route::get('edit/{id}','App\Http\Controllers\personController@editShow');
Route::post('edit','App\Http\Controllers\personController@update');