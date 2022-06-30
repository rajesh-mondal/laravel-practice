<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function sayHi(){
        return "hello world - from the controller";
    }

    function sayMyName($name){
        return "Hello {$name}";
    }

    function postRequest(Request $request){
        $name = $request->post('name');
    }
}
