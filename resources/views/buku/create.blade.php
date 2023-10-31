@extends('master')

@section('content')
<div class="container">
    <h4>Tambah Buku</h4>
    <form action="{{ route('buku.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" name="penulis" id="penulis">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <label for="tgl_terbit" class="form-label">Tgl. Terbit</label>
            <input type="text" class="form-control date" name="tgl_terbit" id="tgl_terbit" placeholder="yyyy/mm/dd">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/buku" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
