<?php

use App\Http\Controllers\BantuanController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SubscriptionController;
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

Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/product', [PagesController::class, 'product']);
Route::get('/project', [PagesController::class, 'project']);
Route::get('/berlanggan', [PagesController::class, 'berlanggan'])->name('berlanggan');
Route::get('/bantuan', [PagesController::class, 'bantuan'])->name('bantuan');

Route::post('/berlanggan/create', [SubscriptionController::class, 'store'])->name('berlanggan.store');
Route::post('/bantuan/create', [BantuanController::class, 'store'])->name('bantuan.store');


Route::fallback(function () {
    return response()->view('pages.errors.404', [], 404);
});

Route::get('/', function () {
    return redirect()->route('home');
})->name('root');
