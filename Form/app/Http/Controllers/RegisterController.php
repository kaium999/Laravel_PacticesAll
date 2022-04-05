<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function GetRegister(){
        return view('Registration');
    }
    function PostRegister(Request $request){
        //dd($request);
        //print_r($request->input('name'));
        //print_r($request->input('email'));
        //print_r($request->input('Password'));
        /*print_r($request->name);
        print_r($request->eamil);
        print_r($request->Password);*/
        /*if($request->has('name')){
            print_r($request->name);
        }*/
        /*if($request->has(['name','eamil'])){
            print_r($request->input('name'));
            print_r($request->input('email'));
        }*/
        /*$request->flash();
        print_r($request->old('name'));
        print_r($request->old('email'));
        print_r($request->old('Password'));

        return view('Registration');*/
        redirect('olddata')->withInput();
    }
    function dataold(){
        return view('Olddata');
    }
}
