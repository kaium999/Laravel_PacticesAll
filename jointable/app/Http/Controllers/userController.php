<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    function user(){
        //return DB::table('employees')->get();
        /*return DB::table('employees')->join('company','employees.id',"=",'company.e_id')
        ->select('company.*','employees.*')->get();*/
        return DB::table('employees')->join('company','employees.id',"=",'company.e_id')
        ->where('employees.id','3')->select('employees.ename','company.cname')->get();
    }
}
