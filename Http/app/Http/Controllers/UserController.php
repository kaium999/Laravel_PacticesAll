<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function User(){
        $user= Http::get("https://jsonplaceholder.typicode.com/posts");
        return view("ViewHttp",['usercol'=>$user]);
    }
}
