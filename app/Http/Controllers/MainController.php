<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function sayHi(){
        return "Hello World - from the Controller";
    }

    function sayName($name){
        return "Hello {$name}";
    }

    function postRequest(Request $request){
        $name = $request->post('name');
    }
}
