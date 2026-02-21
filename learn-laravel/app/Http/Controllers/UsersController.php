<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function addUser(Request $request)
    {
        echo $request->username;
        echo $request->email;
        echo $request->city;
        return "User form submitted";
    }
}
