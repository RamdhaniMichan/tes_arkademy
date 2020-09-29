@extends('Admin.layout')

@section('content')

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
          <h2>add Data +</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('produk.store')}}">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="nama_produk" placeholder="Masukan nama produk ...?">
                        @if($errors->has('nama_produk'))
				            <div class="alert alert-danger">
			            {{$errors->first('nama_produk')}}
				            </div>
			            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="keterangan" ></textarea>
                        @if($errors->has('keterangan'))
				            <div class="alert alert-danger">
			            {{$errors->first('keterangan')}}
				            </div>
			            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="harga" placeholder="Masukan harga produk ...?">
                        @if($errors->has('harga'))
				            <div class="alert alert-danger">
			            {{$errors->first('harga')}}
				            </div>
			            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="jumlah" placeholder="Masukan jumlah produk ...?">
                        @if($errors->has('jumlah'))
				            <div class="alert alert-danger">
			            {{$errors->first('jumlah')}}
				            </div>
			            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection