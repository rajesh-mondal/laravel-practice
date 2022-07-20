<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    function allPeople(){
        return (DB::table('people')
                ->where('id','>',1)
                ->orderby('id','desc')
                ->limit(3)
                ->get('id','name'));
    }

    function testmodel(){
        // $people = People::all()->skip(1)->take(2);
        // $people = People::find(1);
        $people = People::whereEmail('johndoe@gmail.com')->first()->displayNameAndEmail();
        return $people;
    }
}
