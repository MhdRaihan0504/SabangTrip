@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div class="container mx-auto p-4 mt-10">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Your E-Tickets</h1>
    <div class="flex justify-center my-10">
        <a href="/tiket">
            <button class="bg-blue-500 text-white text-center py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                Book your E-Ticket
            </button>
        </a>
    </div>
    @forelse($etikets as $etiket)
    <div class="bg-white rounded-lg shadow-lg p-4 mb-6 max-w-2xl mx-auto border border-gray-200">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
                <img src="{{ asset('image/logo.svg') }}" alt="Logo" class="w-24 h-24 mr-4">
                <div>
                    <h3 class="text-xl font-bold text-blue-600">{{ strtoupper($etiket->nama) }}</h3>
                    <p class="text-gray-600">Reguler</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-lg font-semibold text-blue-600">Rp. 45.000</p>
                @if ($etiket->status == 'pending')
                <p class="text-red-500">{{ $etiket->status }}</p>
                @else
                <p class="text-green text-green-500">{{ $etiket->status }}</p>
                @endif
            </div>
        </div>
        <div class="flex justify-between items-center border-t border-gray-200 pt-4">
            <div>
                <p class="text-gray-600">From</p>
                @if ($etiket->destination == 'sabang')
                <p class="text-xl font-semibold">Banda Aceh</p>
                @else
                <p class="text-xl font-semibold">Sabang</p>
                @endif
                <p class="text-gray-600">{{ $etiket->date }}</p>
            </div>
            <div class="text-center">
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m0 0H8m1 4h1v-4h1m0 0h4m0 0h2m0 0h-2m0 0h-4"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-gray-600">To</p>
                @if ($etiket->destination == 'sabang')
                <p class="text-xl font-semibold">Sabang</p>
                @else
                <p class="text-xl font-semibold">Banda Aceh</p>
                @endif
                <p class="text-gray-600">{{ $etiket->date }}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <p class="text-xl font-bold text-blue-600">{{ $etiket->time }}</p>
            @if ($etiket->status == 'pending')
            <a href="/payment">
                <button class="bg-blue-500 text-white text-center py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                    Payment
                </button>
            </a>
            @elseif ($etiket->status == 'Process')

            @else
            <a href="/show">
                <button class="bg-blue-500 text-white text-center py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                    Show
                </button>
            </a>
            @endif
        </div>
    </div>
    @empty

    <div class="text-center">
        <p class="text-gray-600">No data found.</p>

    </div>

    @endforelse
</div>
@endsection
