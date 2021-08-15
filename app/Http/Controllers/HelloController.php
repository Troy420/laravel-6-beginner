<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $coolString = "HELLO FROM CONTROLLER";
        return view('partials.hello', compact('coolString'));
    }
}
