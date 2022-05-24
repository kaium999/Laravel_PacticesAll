<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function Hello($name,$id){
        return view('hello',['name'=>$name,'id'=>$id]);
    }
}
