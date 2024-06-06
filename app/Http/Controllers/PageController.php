<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Discover;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome', ['title' => 'Home']);
    }

    public function welcome()
    {
        $discovers = Discover::all();
        $testimonials = Testimonial::all();
        return view('index', ['title' => 'Dashboard', 'testimonials' => $testimonials, 'discovers' => $discovers]);
    }

    public function about()
    {
        return view('about', ['title' => 'About']);
    }
}
