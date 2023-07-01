<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/register",function(){
    return view("Register");
});

Route::get("/login",function(){
    return view("Login");
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
