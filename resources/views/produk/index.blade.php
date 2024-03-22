@extends('layouts.main');

@section('content')

<div class="card">
    <div class="table-responsive text-nowrap">
        <a class="btn btn-success" href="{{  route('produk.create') }}">Tambah+</a>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($produk as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->kode_produk }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->stok }}</td>
                        <td>{{ $p->harga }}</td>
                        <td>
                        <div class="dropdown">
                            <a class="btn btn-primary btn-sm" href="{{ route('produk.edit',$p->id_produk) }}"><i class="bx bx-edit-alt me-2">Edit</i></a>
                            <form action="{{ route('produk.delete',$p->id_produk) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')"><i class="bx bx-trash-alt me-2">Delete</i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





@endsection
