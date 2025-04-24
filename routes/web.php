<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/product', function () {
    return view('pages.product');
});
Route::get('/project', function () {
    return view('pages.project');
});
Route::get('/berlanggan', function () {
    return view('pages.berlanggan');
});
Route::get('/bantuan', function () {
    return view('pages.bantuan');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
