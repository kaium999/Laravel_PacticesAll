<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbController extends Controller
{
    function dbConnection(){
        //echo "connection successfullly";
        //return DB::select("select *from user");



        /*QueryBuilder Use*/
        /*$data= DB::table('user')->get();

        return view('Userview',['data'=>$data]);
        */
        //return DB::table('user')->where('id',3)->get();
        //return (array)DB::table('user')->find(2);
        //return DB::table('user')->count();


        /*Data Insert
        return DB::table('user')->insert([
            'u_name'=>'shakil',
            'u_email'=>'shakil@gmail.com',
            'u_password'=>'1234',
        ]);*/

        /*Data Update
        return DB::table('user')->where('id','4')->
        update([
            'u_name'=>'shakil',
            'u_email'=>'sorna@gmail.com',
            'u_password'=>'1234',
        ]);*/

        /*Data Delete*/
        //return DB::table('user')->where('id',4)->delete();
       /* if(DB::table('user')->where('id',4)->exists()){
            return DB::table('user')->where('id',4)->update([
                'u_name'=>'shakil',
                'u_email'=>'sorna@gmail.com',
                'u_password'=>'1234'
            ])

        }*/
        if (DB::table('user')->where('id', '7')->exists()) {
            return DB::table('user')->where('id','7')->update([
                'u_name'=>'Sorna',
                'u_email'=>'sorna@gmail.com',
                'u_password'=>'1234',

            ]);
        }
        else {
            return DB::table('user')->insert([
                'u_name'=>'shakil',
                'u_email'=>'sorna@gmail.com',
                'u_password'=>'1234'
            ]);
        }

        //return view("Dbconnection");
            
        }

    }