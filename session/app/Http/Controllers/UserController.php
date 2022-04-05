<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function LogIn(Request $req){
        //return $req->input();
        //echo"Form Submited";
        $data=$req->input('name');
        $req->session()->put('user',$data);
        //echo session('user');
        return redirect('profile');

    }
}
