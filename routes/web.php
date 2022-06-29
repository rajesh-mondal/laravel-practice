<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function() {
    return "Hello World";
});

Route::get('/hello/world', function() {
    return "Hello World";
});

Route::get('/hello/{name}', function($worldName) {
    $worldName = ucwords($worldName);
    return "Hello {$worldName}";
});

Route::get('/greet/{greetings}/{name}', function($greetings, $worldName) {
    $greetings = ucwords($greetings);
    $worldName = ucwords($worldName);
    return "{$greetings} {$worldName}";
});