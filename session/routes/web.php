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
/*Route::get('/login', function () {
    return view('Login');
});*/
Route::get('/logout', function () {
    if(session()->has('user')){
        session()->pull('user',null);
    }
    return redirect('login');
});
Route::get('/login', function () {
    if(session()->has('user')){
      return redirect('profile');
    }
    return redirect('login');
});
//Route::view('login','Login');
Route::view('profile','Profile');
Route::post('user','App\Http\Controllers\UserController@LogIn');