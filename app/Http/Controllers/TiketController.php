<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Etiket;
use App\Models\User;
use App\Models\Payment;


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
            'user_id' => 'required',
            'nama' => 'required',
            'destination' => 'required',
            'date' => 'required',
            'time' => 'required',
            'occupant' => 'required',
            'email' => 'required'
        ]);

        $etiket = Etiket::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'destination' => $request->destination,
            'date' => $request->date,
            'time' => $request->time,
            'occupant' => $request->occupant,
            'email' => $request->email
        ]);

        $payment = new Payment();
        $payment->user_id = Auth::id();
        $payment->etiket_id = $etiket->id;
        $payment->save();

        // input toastr
        toastr()->success('Ticket has been created successfully!');

        return redirect('/etiket');
    }

    public function showPayment(Request $request)
    {
        $etiket = Etiket::find($request->id);

        return view('user.payment', ['title' => 'Payment', 'etiket' => $etiket]);
    }

    public function payment(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $imagePath = 'images/'.$imageName;
        // if ($request->hasFile('image')) {
        //     $validatedData['image'] = $request->file('image')->store('payment');
        // }
        $etiket = Etiket::find($id);
        $etiket->image = $imagePath;
        $etiket->status = 'Paid';
        $etiket->save();

        // input toastr
        toastr()->success('Payment has been uploaded successfully!');

        return redirect('/etiket');
    }

    public function showTicket(Request $request)
    {
        $etiket = Etiket::find($request->id);

        return view('user.show', ['title' => 'Ticket', 'etiket' => $etiket]);
    }

    public function tiketRequest()
    {
        // find etiket where status is paid
        $etikets = Etiket::where('status', 'Paid')->get();
        return view('admin.request', ['title' => 'Request Ticket', 'etikets' => $etikets]);
    }

    public function tiketEdit(Request $request)
    {
        $etiket = Etiket::find($request->id);

        return view('admin.edit', ['title' => 'Edit Ticket', 'etiket' => $etiket]);
    }

    public function tiketUpdate(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $etiket = Etiket::find($id);
        $etiket->status = $request->status;
        $etiket->save();

        // input toastr
        toastr()->success('Ticket has been updated successfully!');

        return redirect('/tiket/request');
    }
}