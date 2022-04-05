<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    /*function DemoParameter($myname){
        return $myname;

    }
    */

    /*Multiple Parameter Pass*/

    /*function MultipleParameter($FirstName,$MiddleName,$LastName){
        return "First Name:".$FirstName."Middle Name".$MiddleName."LastName".$LastName;

    }
    */
    /*MultiPle data Show in Route toControlller To view page*/
    function DataShowViewpage($FirstName,$MiddleName){
        return view('Demo',['firstname'=>$FirstName,'middlename'=>$MiddleName]);
    }
}
