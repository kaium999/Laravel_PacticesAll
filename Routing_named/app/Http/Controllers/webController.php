<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    function profile(){
        return view('Profile');
    }
}
