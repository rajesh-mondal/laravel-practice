<?php

namespace App\Http\Controllers;
use App\Models\People;
use Illuminate\Support\Facades\DB;

class MainController extends Controller {
    function main() {
        return view( "welcome" );
    }
    function features() {
        return view( "features" );
    }
    function contact() {
        return view( "contact" );
    }

    function allPeople() {
        return ( DB::table( 'People' )
                ->where( 'id', '>', 1 )
                ->orderBy( 'id', 'desc' )
                ->limit( 2 )
                ->get() );
    }

    function testModel(){
        // $people = People::all();
        //$people = People::where('id','>',1)->where('id','<',4)->get();
        //$people = People::whereEmail('jodu@gmail.com')->get();
        $people = People::whereName('Ram')->first()->displayNameAndEmail();
        return $people;
    }
}
