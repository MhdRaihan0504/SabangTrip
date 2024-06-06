@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div class="relative h-screen">
    <img src="{{ asset('image/background.svg') }}" alt="Background Image"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-50">
        <div class="my-52 ml-44">
            <h1 class="text-white text-8xl font-bold">SABANGTRIP</h1>
            <p class="text-white text-4xl w-2/3 my-5 leading-normal">"Unforgettable adventures are available on
                SabangTrip!
                Discover exotic destinations, enjoy the beauty of nature,
                and experience an enthralling adventure. Get the
                best travel experience with us!"</p>
            <a href="/register">
                <button class="bg-[#EEE9DA] hover:bg-[#d6ccae] text-black font-bold py-4 px-6 rounded-full">
                    Get Started
                </button>
            </a>
        </div>
    </div>
</div>
@endsection
