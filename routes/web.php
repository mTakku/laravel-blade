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


Route::get('/hello', function () {
    return view('hello', [
        "name" => "Farel"
    ]);
});

Route::get('/world', function () {
    return view('hello.world', [
        "name" => "Farel"
    ]);
});

Route::get('/html-encoding', function (\Illuminate\Http\Request $request){
    return view("html-encoding", ["name" => $request->input("name")]);
});