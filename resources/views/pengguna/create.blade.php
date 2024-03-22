@extends('layouts.main')

@section('content')
<div class="table-responsive text-nowrap">
  <h4>Pengguna Baru</h4>
    <form action="{{ route('pengguna.store') }}" method="POST">
      @csrf
      <div class="mb-2">
        <label for="nama">nama </label>
        <input type="text" class="form-control" name="nama" id="nama" required>
        @error('nama')
            <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-2">
        <label for="username">username</label>
        <input type="text" class="form-control" name="username" id="username" required>
        @error('username')
            <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-2">
        <label for="password">password</label>
        <input type="password" class="form-control" name="password" id="password" min="1" required>
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Tambah Pengguna Baru</button>
      <a  class="btn btn-danger" href="{{ route('pengguna.index') }}">Kembali</a>
    </form>
  </div>
@endsection