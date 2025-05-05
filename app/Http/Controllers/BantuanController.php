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
            'nama' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kategori' => 'required',
            'pesan' => 'required',
        ]);

        $payload = array_merge($validated, [
            'id_cmn' => $request->input('id_cmn'),
        ]);

        $response = Http::post('https://cmn.co.id/api/bantuan', $payload);
        // $response = Http::post('http://127.0.0.1:8000/api/bantuan', $payload);

        if ($response->successful()) {
            return redirect()->route('bantuan')->with('success', 'Bantuan berhasil terkirim!');
        }

        return redirect()->back()->withErrors(['Bantuan gagal terkirim.']);
    }
}
