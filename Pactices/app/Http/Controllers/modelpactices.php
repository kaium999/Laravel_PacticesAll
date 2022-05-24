<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class modelpactices extends Controller
{
    public function getData(){
        //return  student::all();
        $studata=student::all();
        return view('modelview',['data'=>$studata]);
    }
}
