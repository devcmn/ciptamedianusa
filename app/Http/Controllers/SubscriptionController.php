<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {

        dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscriptions,email',
            'package' => 'required|string',
        ]);

        $response = Http::post('https://cmn.co.id/api/subscribe', $validated);

        if ($response->successful()) {
            return redirect()->route('berlanggan')->with('success', 'Subscription successful!');
        }

        return redirect()->back()->withErrors('Subscription failed.');
    }
}
