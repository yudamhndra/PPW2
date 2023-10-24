<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Carbon\Carbon;

class ControllerBuku extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data_buku = Buku::all();
        // $no = 0;
        $batas = 5;
        $data_buku = Buku::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($data_buku->currentPage()-1);
        $jumlah_buku = Buku::count();
        $jumlah_harga = Buku::sum('harga');

        return view('buku.index', compact('data_buku','no', 'jumlah_buku',  'jumlah_harga'));
    }

    public function search(Request $request)
    {
        $batas = 5;
        $cari = $request->input('kata'); // Mengambil nilai pencarian dari input form

        $data_buku = Buku::where('judul', 'like', '%' . $cari . '%')
            ->orWhere('penulis', 'like', '%' . $cari . '%')
            ->paginate($batas);

        $jumlah_buku = $data_buku->total(); // Mengambil total jumlah buku yang cocok dengan pencarian

        // Menghitung nomor urut untuk setiap item pada halaman
        $no = ($data_buku->currentPage() - 1) * $batas + 1;

        return view('buku.search', compact('data_buku', 'no', 'jumlah_buku', 'cari'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buku = new Buku;

        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;

        $buku->save();

        return redirect('/buku');
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
    public function edit($id)
    {
        $buku = buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl_terbit' => $request->tgl_terbit
        ]);
        return redirect('/buku')->with('success', 'Data buku berhasil diperbarui');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}