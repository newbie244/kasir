@extends('layouts.main')

@section('content')
<h4 class="">Invoice Kode Penjualan {{ $detail_penjualan->kode_penjualan }}</h4>
<p class="my-3">Tanggal {{ $detail_penjualan->tanggal }}</p>

<div class="row">
    <div class="col-md-6">
        <h5>Data Pelanggan</h5>
        <div class="row">
            <div class="col-md-4">
                <p>Nama pelanggan</p>
            </div>
            <div class="col-md-8">
                <p>: {{ $detail_penjualan->pelanggan->nama }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Alamat pelanggan</p>
            </div>
            <div class="col-md-8">
                <p>: {{ $detail_penjualan->pelanggan->alamat }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Telp pelanggan</p>
            </div>
            <div class="col-md-8">
                <p>: {{ $detail_penjualan->pelanggan->telp }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h5>Data petugas</h5>
        <div class="row">
            <div class="col-md-4">
                <p>Nama petugas</p>
            </div>
            <div class="col-md-8">
                {{-- <p>: {{ $detail_penjualan->user->nama }}</p> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Username petugas</p>
            </div>
            <div class="col-md-8">
                {{-- <p>: {{ $detail_penjualan->user->username }}</p> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Level petugas</p>
            </div>
            <div class="col-md-8">
                {{-- <p>: {{ $detail_penjualan->user->level }}</p> --}}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Sub total</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($detail_produk as $detail)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $detail->produk->kode_produk }}</td>
                    <td>{{ $detail->produk->nama }}</td>
                    <td>{{ $detail->produk->harga }}</td>
                    <td>{{ $detail->jumlah }}</td>
                    <td>{{ $detail->sub_total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="mt-5">

    <div class="row ">
        <div class="col-md-2">
            <p>Total Harga</p>
        </div>
        <div class="col-md-2">
            <p>: {{ $detail_penjualan->total_harga }}.00</p>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-2">
            <p>Total Bayar</p>
        </div>
        <div class="col-md-2">
            <p>: {{ $detail_penjualan->bayar }}</p>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-2">
            <p>Total Kembalian</p>
        </div>
        <div class="col-md-2">
            <p>: {{ $detail_penjualan->bayar - $detail_penjualan->total_harga }}.00</p>
        </div>
    </div>
</div>
@endsection
