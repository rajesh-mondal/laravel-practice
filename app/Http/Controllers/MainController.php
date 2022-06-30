<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function main(){
        return view("Welcome");
    }

    function features(){
        return view("features");
    }

    function contact(){
        return view("contact");
    }
}
