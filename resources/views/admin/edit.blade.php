@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div class="container mx-auto p-4">
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
                <p class="text-red-500">{{ $etiket->status }}</p>
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
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 max-w-3xl mx-auto border border-gray-200">
        <!-- Title -->
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Bukti Pembayaran</h1>
        <div class="flex justify-center">
            <img src="{{ asset($etiket->image) }}" alt="Bukti Pembayaran" class="w-64 h-64">
        </div>

        <div class="flex justify-center mt-4">
            <form action="{{ route('tiket.update', $etiket->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" value="Approve" id="status" name="status"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Approve</button>

                <button type="submit" value="Reject" id="status" name="status"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-4">Reject</button>
            </form>
        </div>
        <div class="flex justify-center mt-5">
            <a href="{{ url()->previous() }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
        </div>
    </div>
    </form>
</div>
@endsection
