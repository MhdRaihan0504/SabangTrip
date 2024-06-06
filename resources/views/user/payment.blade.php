@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div class="container mx-auto p-4">
    <form action="{{ route('payment.store', $etiket->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Menu Pembayaran</h1>

            <!-- Payment Section -->
            <div class="flex justify-between items-start">
                <!-- Left Section: QR Code and Payment Methods -->
                <div class="w-1/2">
                    <div class="text-center mb-4">
                        <img src="{{ asset('image/qr-code.png') }}" alt="QR Code" class="w-1/2 h-1/2 mx-auto">
                    </div>
                    <div class="text-center mt-6">
                        <p class="font-bold mb-2">Payment Methods</p>
                        <div class="flex justify-center space-x-4">
                            <div class="flex items-center">
                                <img src="{{ asset('image/ovo.png') }}" alt="OVO" class="w-8 h-8">
                                <p class="ml-2">081300000000</p>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('image/shopeepay.png') }}" alt="ShopeePay" class="w-8 h-8">
                                <p class="ml-2">a.n Sabang Trip</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Section: Bank Details and Upload Payment Proof -->
                <div class="w-1/2 pl-8">
                    <div class="text-center mb-4">
                        <img src="{{ asset('image/bsi-logo.png') }}" alt="BSI Logo" class="w-32 h-32 mx-auto">
                    </div>
                    <div class="text-center mb-4">
                        <p class="font-bold">BSI:</p>
                        <p class="text-gray-600">7200400000 - a.n Sabang Trip</p>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block font-bold mb-2">Upload Bukti Pembayaran</label>
                        <input type="file" id="image" name="image" class="w-full p-2 border border-gray-300 rounded-lg">
                        @error('image')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <p class="text-lg font-semibold text-gray-800">Sub Total: Rp 45.000</p>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center mt-8">
                <a href="{{ url()->previous() }}" class="bg-gray-500 text-white py-2 px-4 rounded-lg shadow hover:bg-gray-600">
                    Back
                </a>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                    Konfirmasi
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
