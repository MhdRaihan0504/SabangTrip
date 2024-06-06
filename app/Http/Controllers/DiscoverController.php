<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discover;
use App\Models\Rating;
use App\Models\User;

class DiscoverController extends Controller
{
    public function index()
    {
        $discovers = Discover::all();
        return view('user/discover', ['title' => 'Discover', 'discovers' => $discovers]);
    }

    public function create()
    {
        return view('admin/discover', ['title' => 'Create Discover']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $imagePath = 'images/'.$imageName;

        Discover::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description
        ]);

        toastr()->success('Discover has been created successfully!');
        
        return redirect('/discover');
    }

    public function show(Request $request)
    {
        $discover = Discover::find($request->id);
        return view('user.detail', ['title' => 'Discover Detail', 'discover' => $discover]);
    }
}