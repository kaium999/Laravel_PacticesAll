<?php

use Illuminate\Support\Facades\Route;

//Route::get("/name/{myname}","App\Http\Controllers\DemoController@DemoParameter");



/*Multiple Parameter Of Routing*/

//Route::get('/name/{FirstName}/{MiddleName}/{LastName}','App\Http\Controllers\DemoController@MultipleParameter');
Route::get('/name/{FirstName}/{MiddleName}','App\Http\Controllers\DemoController@DataShowViewpage');
