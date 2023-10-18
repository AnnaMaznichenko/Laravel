<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view("formProcessor");
    }

    public function store(Request $request)
    {
        $response = [
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
        ];

        //return response()->json($response);
        return view("welcomeUser", ["first_name" => $response["first_name"]]);
    }
}
