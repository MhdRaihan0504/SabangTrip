<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome', ['title' => 'Home']);
    }

    public function welcome()
    {
        return view('index', ['title' => 'Dashboard']);
    }

    public function about()
    {
        return view('about', ['title' => 'About']);
    }
}
