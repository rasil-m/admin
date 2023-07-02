<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    function register(Request $req)
    {
        $user=new User;
        $user->name=$req->input("name");
        $user->email=$req->input("email");
        $user->password=Crypt::encryptString($req->input("password"));
        $user->save();
        $req->session->put("status",true);
        $req->session()->put("username",$req->input("name"));
        return redirect("admin");

    }
    function login(Request $req)
    {
        $user=User::where("email",$req->input("email"))->get();
        $decrypt=$req->input("password");
      if($decrypt==Crypt::decryptString($user[0]->password))
        {
            $req->session()->put("status",true);
            $req->session()->put("username",$user[0]->name);
            return redirect("/admin");
        }
        else{
            return "error";
        }
    }
}
