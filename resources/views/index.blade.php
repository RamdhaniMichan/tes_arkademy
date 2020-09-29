@extends('Admin.layout')

@section('content')

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h2>Daftar Produk</h2>
        </div>
        <div class="card-body">
            <a href="{{route('produk.create')}}"><button class="btn btn-primary btn-sm mb-3">add Data +</button></a>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse($produks as $produk)
                    <tr>
                        <td>{{++$no}}</td>
                        <td>{{$produk->nama_produk}}</td>
                        <td>{{$produk->keterangan}}</td>
                        <td>Rp.{{$produk->harga}}</td>
                        <td>{{$produk->jumlah}}</td>
                        <td><a href="{{route('produk.edit', $produk->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{route('produk.delete', $produk->id)}}" onClick="return confirm('Yakin akan hapus data {{$produk->nama_produk}}')" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @empty
                        <p>No Data</p>
                    @endforelse
                </tbody>
              </table>
            <div>Jumlah Produk : {{$jumlah_data}}</div>
            <div>{{$produks->links()}}</div>
        </div>
    </div>
</div>

@endsection