<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser()
    {
        // return "Raushan";
        return view('user');
    }
    function contactUser()
    {
        return "6280779503";
    }
    function getName($name)
    {
        // return "<h1>Hello this is:</h1> <h1>" . $name . "</h1>";
        return view('getuser', ['name' => $name]);
    }

    function adminLogin()
    {
        if (View::exists('admin.login')) {
            return view('admin.login');
        } else {
            echo "no view found";
        }
    }
}
