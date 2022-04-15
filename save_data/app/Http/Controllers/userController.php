<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class userController extends Controller
{
    function Adduser(Request $req){
        $emplo=new employee;
        $emplo->uname=$req->name;
        $emplo->uemail=$req->email;
        $emplo->upassword=$req->password;
        $emplo->save();
        return redirect('show');

    }
    function showUser(){
        $data=employee::all();
        return view('Showdata',['user'=>$data]);
    }
    function Delete($id){
        $data= employee::find($id);
        $data->delete();
        return redirect('show');
        echo"Delete succsssfully";
    }
    function editShow($id){
        $data=employee::find($id);
        return view('Edit',['user'=>$data]);
    }
    function update(Request $req){
        $data=employee::find($req->id);
        $data->uname=$req->name;
        $data->uemail=$req->email;
        $data->upassword=$req->password;
        $data->save();
        return redirect('show');
    }
}
