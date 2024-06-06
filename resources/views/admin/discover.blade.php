@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div class="mt-32  flex items-center justify-center">
    <div>
        <img src="{{ asset('image/testi.svg') }}" class="mr-16" alt="">
    </div>
    <div class="bg-white p-10 rounded-lg shadow-md w-2/4">
        <h2 class="text-center text-2xl font-bold mb-6">ADD PLACE</h2>
        <form action="{{ route('discover.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4 w-1/2">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded-md" placeholder="Place Name">
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700">Image</label>
                <input type="file" id="image" name="image" class="mt-1 p-2 w-full border rounded-md">
            </div>
        
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea id="description" name="description" class="mt-1 p-2 w-full border rounded-md" rows="4" placeholder="Your Description"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md">Kirim</button>
        </form>
    </div>
</div>
@endsection
