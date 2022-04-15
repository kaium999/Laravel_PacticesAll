<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\phone;
use App\Models\Post;
use App\Models\comment;
use App\Models\catagory;
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
    /*One To One Relation*/
    /*$data=User::find(2)->phone;
    return $data;*/
    $data=Phone::find(1)->User;
    //return $data;
    $users=User::all();
    //return view('welcome',compact('users'));


    /*One To Many Relation*/

    /*$postdata=Comment::find(6)->post;
    return $postdata;*/

    $postdata=Post::with('comment')->get();
    //return $postdata;
    //return view('welcome',compact('postdata'));

    /*Many To Many Relation*/
    $post=catagory::with('post')->get();
    //return $post;
    return view('welcome',compact('post'));
});
Route::get('user','App\Http\Controllers\userController@user');