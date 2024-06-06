<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;


class RatingController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonial.testimonial', ['title' => 'Testimonial', 'testimonials' => $testimonials]);
    }

    public function create()
    {
        return view('testimonial.create', ['title' => 'Create Testimonial']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rating' => 'required| integer| min:1| max:5',
            'message' => 'required',
        ]);

        Testimonial::create([
            'name' => $request->name,
            'rating' => $request->rating,
            'message' => $request->message,
        ]);

        // input toastr
        toastr()->success('Data Testimonial Berhasil Ditambahkan!');

        return redirect('/testimonial')->with('status', 'Data Testimonial Berhasil Ditambahkan!');
    }

}
