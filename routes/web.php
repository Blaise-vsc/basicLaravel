<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeUnit\FunctionUnit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get("/admin/home",function(){
//     return view("admin/home");
// });
Route::get("/",function(){
    return view("home");
});
Route::get("home",function(){
    return view("home");
});

Route::get("service",function(){
    return view("service");
});
Route::get("component",Function(){
    return view("component");
});
Route::get("about/{name}",function($name){
    return view('about',['name'=>$name]);
});
Route::get("dashboard",function(){
    return view("dashboard");
});