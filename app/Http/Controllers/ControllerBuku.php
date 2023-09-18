<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class ControllerBuku extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function buku()
    {
        $data_buku = Buku::all();
        $no = 0;
        $jumlah_buku = Buku::count();
        $jumlah_harga = Buku::sum('harga');

        return view('buku', compact('data_buku','no', 'jumlah_buku',  'jumlah_harga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Total()
    {
        $jumlah_harga = Buku::sum('harga');

        return view('index', compact('jumlah_harga'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
