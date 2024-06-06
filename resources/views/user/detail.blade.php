@extends('layouts.app')

@section('body')
<body style="background-image: url('{{ asset('image/background.png') }}')" class="bg-cover bg-center min-h-screen">
@endsection

@section('content')
<div class="container mx-auto py-12 px-6">
    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/2">
            <a href="{{ url()->previous() }}" class="inline-block mb-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Back</a>
            <img src="{{ asset($discover->image) }}" alt="Discover Image" class="max-w-full h-auto rounded-lg">
        </div>
        <div class="w-full md:w-1/2">
            <h1 class="text-3xl font-bold mb-4">{{ $discover->title }}</h1>
            <p class="text-gray-700">{{ $discover->description }}</p>
        </div>
    </div>
</div>
@endsection
