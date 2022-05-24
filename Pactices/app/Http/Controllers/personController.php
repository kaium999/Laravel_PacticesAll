<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class personController extends Controller
{


    public function getInputpage(){
        return view('inputPage');
    }
    public function Addteacher(Request $req){
        $per=new Teacher;
        $per->tname=$req->name;
        $per->temail=$req->email;
        $per->tmobile=$req->mobile;
        $per->save();
        redirect('showteacher');
    }
    public function showTeacher(){
        $persondata=Teacher::all();
        return view('personview',['data'=>$persondata]);
    }
    public function DeleteTeacher($id){
        $data=Teacher::find($id);
        $data->delete();
        redirect('showteacher');
    }
    function editShow($id){
        $data=Teacher::find($id);
        return view('teacherEdit',['teacher'=>$data]);
    }
    function update(Request $req){
        $data=Teacher::find($req->id);
        $data->tname=$req->name;
        $data->temail=$req->email;
        $data->tmobile=$req->password;
        $data->save();
        return redirect('show');
    }
}
