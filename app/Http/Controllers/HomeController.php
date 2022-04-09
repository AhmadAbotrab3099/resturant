<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //return Home page
    public function index()
    {
        return view('layouts.home');
    }
}
