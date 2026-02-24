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
        $skills = implode(", ", $request->skill);
        print_r("User Skill is: $skills");
        echo "<br>";
        echo "User Gender is: $request->gender";
        echo "<br>";
        echo "User City is: $request->city";
        echo "<br>";
        echo "User Age is: $request->age";
        echo "<br>";


        return "<h3 style=color:green>User Details sumbitted successfully</h3>";
    }
}
