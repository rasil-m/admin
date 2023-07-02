<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    if(Session::get("status"))
     {
        return view("admin_home");
     }
     else
     {
        return view("register");
     }
});

Route::get("/admin",function(){
    return view("admin_home");
});
Route::get("/users",function(){
    return view("users");
});
Route::get("/product",function(){
    return view("product");
});
Route::get("/order",function(){
    return view("order");
});
Route::get("/settings",function(){
    return view("settings");
});

Route::view("register","register");
Route::post("register","App\Http\Controllers\AuthController@register");
Route::view("login","login");
Route::post("login","App\Http\Controllers\AuthController@login");
Route::post("logout","App\Http\Controllers\AuthController@logout");