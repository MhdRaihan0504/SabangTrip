@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div>
    <h1 class="text-black text-3xl font-bold mt-16 ml-40">Explore Top Destination in Sabang.</h1>
    <div class="flex justify-center my-10">
    @foreach ($discovers as $key => $discover)
            @if($key % 4 == 0)
                </div>
                <div class="flex justify-center my-10">
            @endif
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset($discover->image) }}" alt="Card 1" class="w-64 h-64 mx-auto">
            <h1 class="text-xl font-bold mt-5">{{ $discover->title }}</h1>
            <a href="{{ route('discover.show', $discover->id) }}">
                <button class="mt-2 px-4 py-2 bg-[#265073] text-white rounded hover:bg-slate-600 mx-auto">Read
                    More</button>
            </a>
        </div>
        @endforeach
    </div>
    @if (Auth::user()->role == 'admin')
    <div class="flex justify-center mb-10">
        <a href="{{ route('discover.create') }}">
        <button class="mt-5 px-4 py-2 bg-[#265073] text-white rounded-xl hover:bg-black">Add</button>
        </a>
    </div>
    @endif
</div>
@endsection
