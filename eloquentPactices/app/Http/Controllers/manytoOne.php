<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;
class manytoOne extends Controller
{
    public function onetoMany(){

        $data=post::find(1)->comments;
            //return $data;

        //$post=comment::find(5)->post;
        //$post=comment::all();
        //return $post;
        $data=post::with('comments')->get();
        //return $data;
         return view('manytoOne',compact('data'));

    }
}
