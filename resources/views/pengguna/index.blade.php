@extends('layouts.main')

@section('content')
<div class="table-responsive text-nowrap">
  <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah pengguna</a>
 @if (session()->has('success'))
     <div class="alert alert-success mt-2">{{ session('success') }}</div>
 @endif
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Username</th>
          <th>Level</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @forelse ($pengguna as $p)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->username }}</td>
            <td>{{ $p->level }}</td>
            <td>
              <a class="btn btn-warning" href="{{ route('pengguna.edit', $p->id_user) }}"><i class="bx bx-pen me-2"></i>Edit</a>
              <form action="{{ route('pengguna.delete', $p->id_user) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit" onclick="return confirm('yakin hapus pengguna ini?')"><i class="bx bx-trash me-2"></i>Delete</button>
              </form>
              <form action="{{ route('pengguna.reset', $p->id_user) }}" method="post" class="d-inline">
                @csrf
                @method('put')
                <button class="btn btn-secondary" type="submit" onclick="return confirm('yakin reset password pengguna ini?')"><i class="bx bx-recycle me-2" ></i>Reset</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5"><div class="alert alert-warning text-center"><p>Belum ada pengguna</p></div></td>
          </tr>
        @endforelse
        {{-- @foreach ($produk as $p)  
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $p->nama_produk }}</td>
          <td>{{ $p->harga }}</td>
          <td>{{ $p->stok }}</td>
          <td>
            <a class="btn btn-warning text-white" href="{{ route('produk.edit', $p->produk_id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
            <form action="{{ route('produk.delete', $p->produk_id) }}" method="post" class="d-inline">
              @csrf
              @method('delete')
              <button class="btn btn-danger" type="submit"><i class="bx bx-trash me-2"></i>Delete</button>
            </form>
        </tr>
        @endforeach --}}
      </tbody>
    </table>
  </div>
@endsection