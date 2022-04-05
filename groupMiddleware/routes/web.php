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
    return view('Home');
});



Route::get('/noaccess', function () {
    return view('Noaccess');
});
Route::group(['middleware'=>['Groupmiddleware']],function(){
    Route::get('/user', function () {
        return view('User');
    });
    Route::get('/contact', function () {
        return view('Contact');
    });
});