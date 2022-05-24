<?php

use Illuminate\Support\Facades\Route;
use App\Models\student;
use App\Models\phone;

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
   // $data=student::find(1)->Phone;
   //$data=phone::find(1)->student;
   $data=student::all();
    //return $data;
    return view('welcome',compact('data'));
});
Route::get('connection','App\Http\Controllers\test@testeloquent');

Route::get('manytoone','App\Http\Controllers\manytoOne@onetoMany');