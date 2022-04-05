<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dbconnection extends Controller
{
    function dbConnection(){
        //echo "Connection successfully";
        //DB::insert("insert into user(u_name,u_email,u_password)values('Oyshe','oyshe@gmail.com','4356')");
        DB::update("update user set u_name='pranto' where id=1");
         $user=DB::select("select * from user");
         return view('Userview',['users'=>$user]);
      
    }
}
