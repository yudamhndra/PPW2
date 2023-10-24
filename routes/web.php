<?php

use App\Http\Controllers\ControllerBuku;
use App\Http\Controllers\ControllerPenghuni;
use App\Http\Controllers\UjiCobaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about', [
        "name"=> "Yuda",
        "email" => "mahendrayudapradana@mail.ugm.ac.id"
    ]);
});

Route::get('/', [UjiCobaController::class, 'beranda']);

// Perusahaan game
Route::get('/boom', [UjiCobaController::class, 'boomesport']);

Route::get('/prx', [UjiCobaController::class, 'prxesport']);

Route::get('/fnatic', [UjiCobaController::class, 'fnaticesport']);

Route::get('/fpx', [UjiCobaController::class, 'fpxesport']);

// Perumahan
Route::get('/penghuni', [ControllerPenghuni::class, 'daftarPenghuni']);

// Buku
Route::get('/buku', [ControllerBuku::class, 'index']);

Route::get('/buku/create', [ControllerBuku::class, 'create'])->name('buku.create');

Route::post('/buku', [ControllerBuku::class, 'store'])->name('buku.store');

Route::get('buku/edit/{id}', [ControllerBuku::class, 'edit'])->name('buku.edit');

Route::post('/buku/update/{id}', [ControllerBuku::class, 'update'])->name('buku.update');

Route::delete('/buku/delete/{id}', [ControllerBuku::class, 'destroy'])->name('buku.destroy');

Route::get('buku/search', [ControllerBuku::class, 'search'])->name('buku.search');