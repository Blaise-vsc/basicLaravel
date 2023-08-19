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

Route::get("services",function(){
    return view("services");
});
Route::get("dashboard",Function(){
    return view("dashboard");
});
Route::get("about",function(){
    return view('about');
});