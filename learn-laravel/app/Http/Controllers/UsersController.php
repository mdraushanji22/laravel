<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function addUser(Request $request)
    {
        echo "User Name is: $request->username";
        echo "<br>";
        echo "User Email Is: $request->email";
        echo "<br>";

        return "<h3 style=color:green>User form submitted</h3>";
    }
}
