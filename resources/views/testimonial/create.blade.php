@extends('layouts.app')

@section('body', 'class="bg-cover bg-center" style="background-image: url(\'/path/to/your/background.png\')"')

@section('content')
<div class="mt-32  flex items-center justify-center">
    <div>
        <img src="{{ asset('image/testi.svg') }}" class="mr-16" alt="">
    </div>
    <div class="bg-white p-10 rounded-lg shadow-md w-2/4">
        <h2 class="text-center text-2xl font-bold mb-6">SEND REVIEW</h2>
        <form action="{{ route('testimonial.store') }}" method="POST">
            @csrf
            <div class="mb-4 w-1/2">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md" placeholder="Your name">
            </div>
            <div x-data="{ rating: 0 }" class="mb-4">
                <label for="rating" class="block text-gray-700">Rating</label>
                <div class="flex items-center mt-1">
                    <template x-for="star in [1, 2, 3, 4, 5]">
                        <svg @click="rating = star" :class="{ 'text-yellow-500': star <= rating, 'text-gray-300': star > rating }" class="w-6 h-6 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a1 1 0 01.868.504l1.847 3.347 3.764.57a1 1 0 01.55 1.705l-2.73 2.652.644 3.743a1 1 0 01-1.45 1.054L12 17.615l-3.347 1.759a1 1 0 01-1.45-1.054l.644-3.743-2.73-2.652a1 1 0 01.55-1.705l3.764-.57 1.847-3.347A1 1 0 0112 4.354z"></path>
                        </svg>
                    </template>
                </div>
                <input type="hidden" name="rating" :value="rating">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700">Message</label>
                <textarea id="message" name="message" class="mt-1 p-2 w-full border rounded-md" rows="4" placeholder="Your message"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md">Kirim</button>
        </form>
    </div>
</div>
@endsection
