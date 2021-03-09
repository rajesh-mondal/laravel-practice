<?php

namespace App\Http\Controllers;
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
}
