@extends("Layouts.dashbord")
@if (Session::get("status"))
 @section("name","Welcome ".Session::get("username"));
@endif