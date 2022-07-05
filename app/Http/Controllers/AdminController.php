<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{
    //
    function login (Request $req)
    {
        $admin=return Admin ::where(['email'=>$req->email])->first();
        if(!$admin || hash::check($req->password,$admin->password))
        {
            return "password or username doesn't match";
        }
        else
        $req->session()->put('admin',$admin);
        {return redirect ('/adminhomepage');
        }


       
    }
}
