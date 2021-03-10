<?php

use App\Http\Controllers\MainController;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use Illuminate\Http\Request;

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

Route::get('/', [MainController::class,'main']);
Route::get('/features', [MainController::class,'features']);
Route::get('/contact', [MainController::class,'contact']);
Route::get('/allPeople', [MainController::class,'allPeople']);
Route::get('/test', [MainController::class,'testModel']);

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/hello/world',[MainController::class,'sayHi']);
Route::get('/sayname/{name}',[MainController::class,'sayName']);

Route::get('/hello', function () {
    //eturn "Hello World";
    return ['name'=>'world'];
});

Route::get('/hello/{world}', function ($world) {
    //return "Hello World";
    return view("info",[
        'name'=>$world,
        'time'=>time()
    ]);
});

// Route::get('/hello/{name}', function ($worldName) {
//     $worldName = ucwords($worldName);
//     return "Hello {$worldName}";
// });

Route::get('/greet/{greetings}/{name}', function ($greetings, $worldName) {
    $greetings = ucwords($greetings);
    $worldName = ucwords($worldName);
    return "{$greetings} {$worldName}";
});

Route::post('/say', function (Request $request) {
    $newName = $request->post('name');
    echo "Hello {$newName}";
});

