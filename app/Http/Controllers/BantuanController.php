<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BantuanController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'id_cmn' => 'required|string',
            'nama' => 'required|string',
            'no_telp' => 'required|string',
            'email' => 'required|email',
            'kategori' => 'required|string',
            'pesan' => 'required|string',
        ]);

        $response = Http::post('https://cmn.co.id/api/bantuan', $validated);

        if ($response->successful()) {
            return redirect()->route('bantuan')->with('success', 'Bantuan berhasil terkirim!');
        }

        return redirect()->back()->withErrors(['Bantuan gagal terkirim.']);
    }
}
