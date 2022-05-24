<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbconnection extends Controller
{
    public function connection(){
        //return "connection successfully";
        //return DB::select("select *from user");
        $data=DB::table('user')->get();
        return view('dataview',['data'=>$data]);
    }
}
