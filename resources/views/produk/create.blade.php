@extends('layouts.main');

@section('content')

<div class="table-responsive text-nowrap">
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kode Produk</label>
            <input type="text" class="form-control" placeholder="Kode Produk" name="kode_produk">
            @error('kode')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control" placeholder="Nama Produk" name="nama">
            @error('nama')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Stok Produk</label>
            <input type="number" class="form-control" placeholder="Stok Produk" name="stok">
            @error('stok')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Harga Produk</label>
            <input type="number" class="form-control" placeholder="Harga Produk" name="harga">
            @error('harga')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah Produk</button>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection
