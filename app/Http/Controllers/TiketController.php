<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Etiket;
use App\Models\User;


class TiketController extends Controller
{
    public function index()
    {
        $etikets = DB::table('etiket')->get();
        return view('user.etiket', ['title' => 'Your E-Ticket', 'etikets' => $etikets]);
    }

    public function show (Request $request)
    {
        return view('user.tiket', ['title' => 'Ticket']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'destination' => 'required',
            'date' => 'required',
            'time' => 'required',
            'occupant' => 'required',
            'email' => 'required'
        ]);

        $id = DB::table('etiket')->max('id');

        DB::table('etiket')->insert([
            'id' => $id + 1,
            'nama' => $request->nama,
            'destination' => $request->destination,
            'date' => $request->date,
            'time' => $request->time,
            'occupant' => $request->occupant,
            'email' => $request->email
        ]);

        return redirect('index');
    }

    public function showPayment(Request $request)
    {
        return view('user.payment', ['title' => 'Payment']);
    }

    public function payment(Request $request)
    {

    }
}