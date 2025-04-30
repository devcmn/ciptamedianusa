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

        return view('pages.home.home', compact('projects', 'clusters'));
    }

    public function project()
    {
        return view('pages.project.project');
    }

    public function product()
    {
        return view('pages.product.product');
    }

    public function berlanggan()
    {
        $responseProject = Http::get('https://cmn.co.id/api/project');
        $projects = $responseProject->json();
        return view('pages.berlanggan.berlanggan', compact('projects'));
    }

    public function bantuan()
    {
        return view('pages.bantuan.bantuan');
    }
}
