<?php

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

Route::get('/boom', [UjiCobaController::class, 'boomesport']);

Route::get('/prx', [UjiCobaController::class, 'prxesport']);

Route::get('/fnatic', [UjiCobaController::class, 'fnaticesport']);

Route::get('/fpx', [UjiCobaController::class, 'fpxesport']);

Route::get('/penghuni', [ControllerPenghuni::class, 'daftarPenghuni']);

Route::get('/', [UjiCobaController::class, 'beranda']);