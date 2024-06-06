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
        </div>
    </div>
</div>
<div>
    <h1 class="text-black text-3xl font-bold mt-16 ml-40">Explore Top Destination in Sabang.</h1>
    <div class="flex justify-center my-10">
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset('image/card1.png') }}" alt="Card 1" class="w-64 h-64 mx-auto">
            <button class="mt-2 px-4 py-2 bg-[#265073] text-white rounded hover:bg-slate-600 mx-auto">Card</button>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset('image/card2.png') }}" alt="Card 2" class="w-64 h-64 mx-auto">
            <button class="mt-2 px-4 py-2 bg-[#265073] text-white rounded hover:bg-slate-600 mx-auto">Card</button>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset('image/card3.png') }}" alt="Card 3" class="w-64 h-64 mx-auto">
            <button class="mt-2 px-4 py-2 bg-[#265073] text-white rounded hover:bg-slate-600 mx-auto">Card</button>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset('image/card4.png') }}" alt="Card 4" class="w-64 h-64 mx-auto">
            <button class="mt-2 px-4 py-2 bg-[#265073] text-white rounded hover:bg-slate-600 mx-auto">Card</button>
        </div>
    </div>
    <div class="flex justify-center">
        <button class="mt-5 px-4 py-2 bg-[#265073] text-white rounded-xl hover:bg-black">Load More</button>
    </div>
</div>

<div>
    <h1 class="text-black text-3xl font-bold mt-16 ml-40">E-Ticket for Ship</h1>
    <div class="flex justify-center items-center mt-10 ">
        <form class="flex flex-wrap w-5/6 bg-white p-10 border-8 border-[#D9D9D9]">
            <div class="flex flex-col w-1/6 mx-9">
                <label for="destination" class="text-black text-lg font-semibold">Destination</label>
                <select id="destination" name="destination" class="mt-2 px-2 py-2 border border-gray-300 rounded-lg">
                    <option value="destination1">Destination 1</option>
                    <option value="destination2">Destination 2</option>
                    <option value="destination3">Destination 3</option>
                </select>
            </div>
            <div class="flex items-center justify-center mx-2">
                <div class="w-px h-16 bg-gray-300"></div>
            </div>
            <div class="flex flex-col w-1/6 mx-9">
                <label for="departure_date" class="text-black text-lg font-semibold">Departure Date</label>
                <input type="date" id="departure_date" name="departure_date"
                    class="mt-2 px-2 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="flex items-center justify-center mx-2">
                <div class="w-px h-16 bg-gray-300"></div>
            </div>
            <div class="flex flex-col w-1/6 mx-9">
                <label for="departure_time" class="text-black text-lg font-semibold">Departure Time</label>
                <input type="time" id="departure_time" name="departure_time"
                    class="mt-2 px-2 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="flex items-center justify-center mx-2">
                <div class="w-px h-16 bg-gray-300"></div>
            </div>
            <div class="flex flex-col w-1/6 mx-9">
                <label for="occupant" class="text-black text-lg font-semibold">Occupant</label>
                <select id="occupant" name="occupant" class="mt-2 px-2 py-2 border border-gray-300 rounded-lg">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="flex items-center justify-center mx-2">
                <div class="w-px h-16 bg-gray-300"></div>
            </div>
            <button type="submit"
                class="mt-6 px-4 py-2 bg-[#265073] text-white rounded hover:bg-slate-600">Submit</button>
        </form>
    </div>
</div>

<div>
    <h1 class="text-black text-3xl font-bold mt-16 ml-40">Testimonial</h1>
    <div class="flex justify-center mt-10 mb-16">
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset('image/pp.svg') }}" alt="Profile Picture" class="w-20 h-20 mx-auto rounded-full">
            <h2 class="text-xl font-bold">Nama 1</h2>
            <p class="text-sm text-gray-500">Tanggal 1</p>
            <p>Deskripsi testimonial 1.</p>
            <p>Rating: ★★★★☆</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset('image/pp.svg') }}" alt="Profile Picture" class="w-20 h-20 mx-auto rounded-full">
            <h2 class="text-xl font-bold">Nama 2</h2>
            <p class="text-sm text-gray-500">Tanggal 2</p>
            <p>Deskripsi testimonial 2.</p>
            <p>Rating: ★★★★☆</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset('image/pp.svg') }}" alt="Profile Picture" class="w-20 h-20 mx-auto rounded-full">
            <h2 class="text-xl font-bold">Nama 3</h2>
            <p class="text-sm text-gray-500">Tanggal 3</p>
            <p>Deskripsi testimonial 3.</p>
            <p>Rating: ★★★★☆</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset('image/pp.svg') }}" alt="Profile Picture" class="w-20 h-20 mx-auto rounded-full">
            <h2 class="text-xl font-bold">Nama 4</h2>
            <p class="text-sm text-gray-500">Tanggal 4</p>
            <p>Deskripsi testimonial 4.</p>
            <p>Rating: ★★★★☆</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset('image/pp.svg') }}" alt="Profile Picture" class="w-20 h-20 mx-auto rounded-full">
            <h2 class="text-xl font-bold">Nama 5</h2>
            <p class="text-sm text-gray-500">Tanggal 5</p>
            <p>Deskripsi testimonial 5.</p>
            <p>Rating: ★★★★☆</p>
        </div>
    </div>
</div>

@endsection
