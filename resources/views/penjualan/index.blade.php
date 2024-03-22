@extends('layouts.main');

@section('content')

<div class="card">
    <div class="table-responsive text-nowrap">
        <a class="btn btn-success" href="{{  route('penjualan.pelanggan') }}">Tambah Penjualan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Penjualan</th>
                    <th>Tanggal</th>
                    <th>Total Harga</th>
                    <th>Bayar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($penjualan as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->kode_penjualan }}</td>
                        <td>{{ $p->tanggal }}</td>
                        <td>{{ $p->total_harga }}</td>
                        <td>{{ $p->bayar }}</td>
                        <td>
                            <a class="btn btn-primary text-white" href="{{ route('penjualan.invoice',$p->kode_penjualan) }}">Invoice</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
