<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Buku</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
            <h1 class="text-center" style="padding: 20px;">Daftar Buku</h1>
        <div class="table-responsive mx-auto">
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Harga</th>
                        <th>Tanggal Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_buku as $buku)
                    <tr>
                        <td style="flex: center;">{{ ++$no }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.' )}}</td>
                        <td>{{ date('d F Y', strtotime($buku->tgl_terbit)) }}</td>
                        <td align="center">
                            <div>
                                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-primary" onclick="return confirm('Yakin mau dihapus?')">Delete</button>
                                </form>
                            </div>
                            <p></p>
                            <div>
                                <form action="{{ route('buku.edit', $buku->id) }}">
                                    @csrf
                                    <button  class="btn btn-primary" onclick="">Edit</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @include('pagination', ['paginator' => $data_buku])
            
            <form action="{{route('buku.search')}}" method="get">
                @csrf
                <input type="text" name="kata" class="form-control" placeholder="cari..." style="width: 30%;
                display: inline; margin-top:10px; margin-bottom: 10px; float:right;">
            </form>

            <form action="{{ route('buku.create')}}" align="left">
                <button class="btn btn-primary" onclick="">Tambah buku</button>
            </form>

            <p></p>

            <p><strong>Total Buku yang tersedia:</strong> {{ number_format($jumlah_buku) }} buah</p>

            <p><strong>Total Harga Semua Buku:</strong> Rp{{ number_format($jumlah_harga, 2, ',', '.') }}</p>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</x-app-layout>

<!-- <!DOCTYPE html>
<html lang="en"> -->

<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Daftar Buku</h1>
        <div class="table-responsive mx-auto">
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Harga</th>
                        <th>Tanggal Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_buku as $buku)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.' )}}</td>
                        <td>{{ date('d F Y', strtotime($buku->tgl_terbit)) }}</td>
                        <td align="center">
                            <div>
                                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin mau dihapus?')">Delete</button>
                                </form>
                            </div>
                            <p></p>
                            <div>
                                <form action="{{ route('buku.edit', $buku->id) }}">
                                    @csrf
                                    <button onclick="">Edit</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @include('pagination', ['paginator' => $data_buku])
            
            <form action="{{route('buku.search')}}" method="get">
                @csrf
                <input type="text" name="kata" class="form-control" placeholder="cari..." style="width: 30%;
                display: inline; margin-top:10px; margin-bottom: 10px; float:right;">
            </form>

            <form action="{{ route('buku.create')}}" align="left">
                <button onclick="">Tambah buku</button>
            </form>

            <p></p>

            <p><strong>Total Buku yang tersedia:</strong> {{ number_format($jumlah_buku) }} buah</p>

            <p><strong>Total Harga Semua Buku:</strong> Rp{{ number_format($jumlah_harga, 2, ',', '.') }}</p>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> -->