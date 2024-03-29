<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FormController;

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

Route::get('/',[MainController::class,'main']);
Route::get('/features',[MainController::class,'features']);
Route::get('/contact',[MainController::class,'contact']);
Route::get('/allpeople',[MainController::class,'allpeople']);
Route::get('/test',[MainController::class,'testModel']);
Route::get('/form',[FormController::class,'displayForm'])->name("form.create");
Route::post('/save',[FormController::class,'saveForm'])->name("form.save");