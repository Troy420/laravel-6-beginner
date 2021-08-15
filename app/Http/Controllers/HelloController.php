<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about() {
        return view('partials.about');
    }

    public function services() {
        return view('partials.services');
    }
}
