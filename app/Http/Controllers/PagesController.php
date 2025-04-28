<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function home()
    {
        $responseProject = Http::get('https://cmn.co.id/api/project');
        $projects = $responseProject->json();

        $responseCluster = Http::get('https://cmn.co.id/api/cluster');
        $clusters = $responseCluster->json();

        return view('pages.home', compact('projects', 'clusters'));
    }

    public function project()
    {
        return view('pages.project');
    }

    public function product()
    {
        return view('pages.product');
    }

    public function berlanggan()
    {
        return view('pages.berlanggan');
    }

    public function bantuan()
    {
        return view('pages.bantuan');
    }
}
