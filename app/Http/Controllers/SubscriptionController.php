<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'nama' => 'required',
            'no_ktp' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'project' => 'required',
            'layanan' => 'required',
            'alamat' => 'required',
        ]);

        $response = Http::post('https://cmn.co.id/api/subscribe', $validated);
        // $response = Http::post('http://127.0.0.1:8001/api/subscribe', $validated);

        if ($response->successful()) {
            return redirect()->route('berlanggan')->with('success', 'Subscription successful!');
        }

        return redirect()->back()->withErrors(['Subscription failed.']);
    }
}
