<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'account'],function(){
    Route::get('/profile',function(){
        return"This pofile Page";
    });
    Route::get('/login',function(){
        return"This login Page";
    });
    Route::get('/logout',function(){
        return"This LogOut Page";
    });
    Route::get('/update',function(){
        return"This update Page";
    });


});