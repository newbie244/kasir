@extends('layouts.main');

@section('content')

<div class="card">
    <div class="table-responsive text-nowrap">
        <a class="btn btn-success" href="{{  route('pelanggan.create') }}">Tambah+</a>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($pelanggan as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->telp }}</td>
                        <td>
                        <div class="dropdown">
                            <a class="btn btn-primary btn-sm" href="{{ route('pelanggan.edit',$p->id_pelanggan) }}"><i class="bx bx-edit-alt me-2">Edit</i></a>
                            <form action="{{ route('pelanggan.delete',$p->id_pelanggan) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Pelanggan ini?')"><i class="bx bx-trash-alt me-2">Delete</i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





@endsection
