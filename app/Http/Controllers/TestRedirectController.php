<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRedirectController extends Controller
{
    public function __invoke()
    {
        //return redirect()->away("http://google.com");
        //return redirect()->action([EntityController::class, "index"]);
        return redirect()->route("books");
    }
}
