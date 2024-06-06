@extends('layouts.no')

@section('body')

@section('content')
<div class="h-screen flex items-center justify-center">

    <div class="bg-[#EEE9DA] bg-opacity-70 p-6 rounded shadow-lg w-1/3 flex items-center justify-center">
        <div class="bg-[#EEE9DA] p-6 rounded shadow-lg w-full">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('image/logo.svg') }}" alt="Logo">
            </div>
            <form action="/login" method="POST" class="flex flex-col items-center">
                @csrf
                <div class="mb-4 w-2/3 ">
                    <input class="shadow rounded-2xl bg-[#265073] appearance-none border w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email">
                </div>
                <div class="mb-4 w-2/3 ">
                    <input class="shadow rounded-2xl bg-[#265073] appearance-none border w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password">
                </div>
                <div class="mb-4 flex justify-center">
                    <button class="bg-[#A6B1E180] w-80 hover:bg-[#3BC4F3] text-black font-bold py-2 px-4 rounded-2xl focus:outline-none focus:shadow-outline" type="submit">
                        Masuk
                    </button>
                </div>
                <div class="text-center">
                    Belum punya akun? <a href="/register" class="font-bold hover:text-blue-700">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection