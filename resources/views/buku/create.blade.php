@extends('master')

@section('content')
<div class="container">
    <h4>Tambah Buku</h4>
    <form action="{{ route('buku.store')}}" method="post">
        @csrf
        <div>Judul <input type="text" name="judul"></div>
        <div>Penulis <input type="text" name="penulis"></div>
        <div>Harga <input type="text" name="harga" id=""></div>
        <div> Tgl. Terbit <input type="text" name="tgl_terbit" id=""></div>
        <div><button type="submit">Simpan</button>
            <a href="/buku">Batal</a>
        </div>
    </form>
</div>
@endsection