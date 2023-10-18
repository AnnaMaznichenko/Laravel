<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyUserController extends Controller
{
    public function showUser()
    {
        $user = new \StdClass();
        $user->first_name = "Anna";
        $user->last_name = "Kusyanna";
        $user->id = 1;

        return response()->json($user);
    }
}
