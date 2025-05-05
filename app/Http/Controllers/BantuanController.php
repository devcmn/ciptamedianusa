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
            'id_cmn' => 'required',
            'nama' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kategori' => 'required',
            'pesan' => 'required',
        ]);

        $response = Http::post('https://cmn.co.id/api/bantuan', $validated);

        if ($response->successful()) {
            return redirect()->route('bantuan')->with('success', 'Bantuan berhasil terkirim!');
        }

        return redirect()->back()->withErrors(['Bantuan gagal terkirim.']);
    }
}
