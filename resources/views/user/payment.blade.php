@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div class="container mx-auto p-4">
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
                    <label for="payment-proof" class="block font-bold mb-2">Upload Bukti Pembayaran</label>
                    <input type="file" id="payment-proof" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>
                <div class="text-center">
                    <p class="text-lg font-semibold text-gray-800">Sub Total: Rp 45.000</p>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-between items-center mt-8">
            <button class="bg-gray-500 text-white py-2 px-4 rounded-lg shadow hover:bg-gray-600">
                Back
            </button>
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                Konfirmasi
            </button>
        </div>
    </div>
</div>
@endsection
