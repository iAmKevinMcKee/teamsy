<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function show()
    {
        if(!auth()->check()) {
            return view('welcome');
        } else {
            return view('dashboard');
        }
    }
}
