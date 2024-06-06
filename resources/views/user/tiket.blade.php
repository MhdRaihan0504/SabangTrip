@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-8 w-2/4 h-2/3 items-center mx-auto mt-32">
    <h1 class="text-2xl font-bold mb-2">Book your E-Tiket Now</h1>
    <p class="mb-6">So our team can reach out to you on time</p>

    <form action="/tiket" method="POST">
        @csrf

        <input type="hidden" name="nama" id="nama" value="{{ Auth::user()->nama }}">
        <div class="mb-4">
            <label for="destination" class="block text-gray-700">Destination</label>
            <select id="destination" name="destination" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                <option value="">Choose Destination</option>
                <option value="sabang">Banda Aceh -> Sabang</option>
                <option value="banda">Sabang -> Banda Aceh</option>
            </select>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="date" class="block text-gray-700">Departure Date</label>
                <input type="date" id="date" name="date"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
            </div>
            <div>
                <label for="time" class="block text-gray-700">Departure Time</label>
                <select id="time" name="time"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                    <option>Choose Time</option>
                    <!-- Time options will be populated by JavaScript -->
                </select>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="occupant" class="block text-gray-700">Occupant</label>
                <input type="number" id="occupant" name="occupant"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200"
                    placeholder="Number of Occupants">
            </div>
            <div>
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="eg: meutiaaini@gmail.com" value="{{ Auth::user()->email }}"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" readonly>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-500 text-white py-3 px-6 rounded-lg shadow hover:bg-blue-600 flex items-center">
                Next
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </button>
        </div>
    </form>
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
