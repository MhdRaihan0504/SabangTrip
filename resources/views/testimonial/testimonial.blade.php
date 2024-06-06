@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div>
    <h1 class="text-black text-center text-3xl font-bold mt-16">Testimonial</h1>
    <div class="flex justify-center">
    @foreach ($testimonials as $key => $testimonial)
            @if($key % 4 == 0)
                </div>
                <div class="flex justify-center my-10">
            @endif
        <div class="flex justify-center mt-10 mb-16">
            <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center w-80">
                <img src="{{ asset('image/pp.svg') }}" alt="Profile Picture" class="w-20 h-20 mx-auto rounded-full">
                <h2 class="text-xl font-bold">{{ $testimonial->name }}</h2>
                <p class="text-sm text-gray-500">{{ $testimonial->created_at }}</p>
                <p class="mt-5">{{ \Illuminate\Support\Str::limit($testimonial->message, 80) }}</p>
                <div class="flex mt-5">
                    @for ($i = 1; $i <= 5; $i++) <svg
                        class="w-8 h-8 @if($i <= $testimonial->rating) text-yellow-500 @else text-gray-300 @endif"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a1 1 0 01.868.504l1.847 3.347 3.764.57a1 1 0 01.55 1.705l-2.73 2.652.644 3.743a1 1 0 01-1.45 1.054L12 17.615l-3.347 1.759a1 1 0 01-1.45-1.054l.644-3.743-2.73-2.652a1 1 0 01.55-1.705l3.764-.57 1.847-3.347A1 1 0 0112 4.354z">
                        </path>
                        </svg>
                        @endfor
                </div>
            </div>
        </div>
        @endforeach
    </div>



    <div class="flex justify-center">
        <a href="{{ route('testimonial.create') }}">
            <button class="mt-5 px-4 py-2 bg-[#265073] text-white rounded-xl hover:bg-black">Add</button></a>
    </div>
</div>
@endsection
