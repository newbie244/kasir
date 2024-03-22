@extends('layouts.main')

@section('content')
<div class="table-responsive text-nowrap">
  <h4>Pengguna edit</h4>
    <form action="{{ route('pengguna.update', $pengguna->id_user) }}" method="POST">
      @csrf
      @method('put')
      <div class="mb-2">
        <label for="nama">nama </label>
        <input type="text" class="form-control" name="nama" id="nama" required value="{{ old('nama', $pengguna->nama) }}">
        @error('nama')
            <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-2">
        <label for="username">username</label>
        <input type="text" class="form-control" name="username" id="username" required value="{{ old('username', $pengguna->username) }}">
        @error('username')
            <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-2">
        <label for="password">password</label>
        <input type="password" class="form-control" name="password" id="password" min="1" placeholder="kosongi jika tidak ingin mengubah password">
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">edit pengguna</button>
      <a  class="btn btn-danger" href="{{ route('pengguna.index') }}">Kembali</a>
    </form>
  </div>
@endsection