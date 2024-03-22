@extends('layouts.main');

@section('content')

<div class="table-responsive text-nowrap">
    <form action="{{ route('pelanggan.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama">
            @error('nama')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat">
            @error('alamat')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">No Telp</label>
            <input type="number" class="form-control" placeholder="No Telp" name="telp">
            @error('telp')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection
