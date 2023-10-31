@extends('master')

@section('content')
<div class="container">
    <h4>Edit Buku</h4>
    <form action="{{ route('buku.update', $buku->id) }}" method="post">
        @csrf
        @method('POST') <!-- Tambahkan ini untuk metode HTTP POST -->
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}">
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $buku->harga }}">
        </div>
        <div class="form-group">
            <label for="tgl_terbit">Tgl. Terbit</label>
            <input type="text" class="form-control" id="tgl_terbit" name="tgl_terbit" value="{{ $buku->tgl_terbit }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/buku" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
