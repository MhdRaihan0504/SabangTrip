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
        @php $count = 0; @endphp
        @foreach ($discovers as $discover)
        @if ($count < 4) <div class="bg-white shadow-lg rounded-lg p-5 mx-16 text-center">
            <img src="{{ asset($discover->image) }}" alt="Card 1" class="w-64 h-64 mx-auto">
            <h1 class="text-xl font-bold mt-5">{{ $discover->title }}</h1>
            <a href="{{ route('discover.show', $discover->id) }}">
                <button class="mt-2 px-4 py-2 bg-[#265073] text-white rounded hover:bg-slate-600 mx-auto">Read
                    More</button>
            </a>
    </div>
    @php $count++; @endphp
    @endif
    @if ($count == 4)
    @php break; @endphp
    @endif
    @endforeach
</div>
</div>
<div class="flex justify-center">
    <a href="{{ route('discover') }}">
        <button class="mt-5 px-4 py-2 bg-[#265073] text-white rounded-xl hover:bg-black">Load More</button>
    </a>
</div>
</div>

<div>
    <h1 class="text-black text-3xl font-bold mt-16 ml-40">E-Ticket for Ship</h1>
    <div class="flex justify-center items-center mt-10 ">
        <form action="{{ route('tiket.store') }}" method="POST"
            class="flex flex-wrap w-5/6 bg-white p-10 border-8 border-[#D9D9D9]">
            @csrf
            <input type="hidden" name="nama" id="nama" value="{{ Auth::user()->nama }}">
            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
            <div class="flex flex-col w-1/6 mx-9">
                <label for="destination" class="text-black text-lg font-semibold">Destination</label>
                <select id="destination" name="destination" class="mt-2 px-2 py-2 border border-gray-300 rounded-lg">
                    <option value="">Choose Destination</option>
                    <option value="sabang">Banda Aceh -> Sabang</option>
                    <option value="banda">Sabang -> Banda Aceh</option>
                </select>
            </div>
            <div class="flex items-center justify-center mx-2">
                <div class="w-px h-16 bg-gray-300"></div>
            </div>
            <div class="flex flex-col w-1/6 mx-9">
                <label for="date" class="text-black text-lg font-semibold">Departure Date</label>
                <input type="date" id="date" name="date" class="mt-2 px-2 py-2 border border-gray-300 rounded-lg">
            </div>
            <div class="flex items-center justify-center mx-2">
                <div class="w-px h-16 bg-gray-300"></div>
            </div>
            <div class="flex flex-col w-1/6 mx-9">
                <label for="time" class="text-black text-lg font-semibold">Departure Time</label>
                <select id="time" name="time"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                    <option>Choose Time</option>
                </select>
            </div>
            <div class="flex items-center justify-center mx-2">
                <div class="w-px h-16 bg-gray-300"></div>
            </div>
            <div class="flex flex-col w-1/6 mx-9">
                <label for="occupant" class="text-black text-lg font-semibold">Occupant</label>
                <input type="number" id="occupant" name="occupant"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200"
                    placeholder="Number of Occupants">
                <input type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
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
    <div class="flex justify-center">
        @php $count = 0; @endphp
        @foreach ($testimonials as $testimonial)
        @if ($count % 4 == 0)
    </div>
    <div class="flex justify-center">
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
        @php $count++; @endphp
        @endforeach
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const destinationSelect = document.getElementById('destination');
            const timeSelect = document.getElementById('time');

            const timesForSabang = ['08:00 - 08.45', '10:00 - 10.45', '16:30 - 17.15'];
            const timesForBanda = ['08.00 - 08.45', '14.30 - 15.15', '17.00 - 17.45'];

            destinationSelect.addEventListener('change', function () {
                const selectedDestination = this.value;
                let times = [];

                if (selectedDestination === 'sabang') {
                    times = timesForSabang;
                } else if (selectedDestination === 'banda') {
                    times = timesForBanda;
                }

                timeSelect.innerHTML = '<option>Choose Time</option>';

                times.forEach(time => {
                    const option = document.createElement('option');
                    option.value = time;
                    option.textContent = time;
                    timeSelect.appendChild(option);
                });
            });
        });

    </script>

    @endsection
