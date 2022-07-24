<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function displayForm(){
        return view("form");
    }

    function saveForm(){
        
    }
}
