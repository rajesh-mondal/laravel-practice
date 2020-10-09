<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    //eturn "Hello World";
    return ['name'=>'world'];
});

Route::get('/hello/world', function () {
    return "Hello World";
});

Route::get('/hello/{name}', function ($worldName) {
    $worldName = ucwords($worldName);
    return "Hello {$worldName}";
});

Route::get('/greet/{greetings}/{name}', function ($greetings, $worldName) {
    $greetings = ucwords($greetings);
    $worldName = ucwords($worldName);
    return "{$greetings} {$worldName}";
});

Route::post('/say', function ( Request $request ) {
    $newName = $request->post('name');
    echo "Hello {$newName}";
});

