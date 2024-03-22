@extends('layouts.penjualan')

@section('content')
<div class="row mt-4">
    <h3>Nama Pelanggan : {{ $pelanggan->pelanggan->nama }}</h3>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-4">kode produk</div>
                    <form action="" method="GET" class="col-md-8">
                        <div class="row">
                        <div class="col-md-8">
                            <select name="id_produk" id="" class="form-control">
                                <option value="" selected>Pilih Produk</option>
                                @forelse ( $produk as $p )
                                <option value="{{ $p->id_produk }}">{{ $p->kode_produk }}:{{ $p->nama }}-{{ $p->stok }}</option>
                                @empty
                                <option value="">Belum ada produk disini</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-info">Pilih</button>
                        </div>
                    </div>
                    </form>
                </div>

                <form action="{{ route('penjualan.detail.create') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_produk" value="{{ isset($d_produk) ? $d_produk->id_produk : '' }}">
                    <input type="hidden" name="kode_penjualan" value="{{ isset($kode_penjualan) ? $kode_penjualan : '' }}">
                    <div class="row mb-2">
                        <div class="col-md-4">nama</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="nama produk" readonly value="{{ isset($d_produk) ? $d_produk->nama : '' }}">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">harga</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control harga-produk" name="harga" placeholder="harga produk" readonly value="{{ isset($d_produk) ? $d_produk->harga : '' }}">
                        </div>
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-4">jumlah</div>
                        <div class="col-md-8">
                            <input type="number" name="jumlah" class="form-control jumlah" min="1" max="" required>
                        </div>
                    </div>
                    <a href="{{ route('penjualan.index') }}" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-info">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Sub total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($detail_penjualan as $dp )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dp->produk->nama }}</td>
                        <td>{{ $dp->jumlah }}</td>
                        <td>{{ $dp->sub_total }}</td>
                        <td>
                            <a href="{{ route('penjualan.detail.delete' , '?id_detail='.$dp->id_detail) }}">X</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5"><div class="alert alert-secondary">Belum ada produk</div></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4>Pembayaran</h4>
                <form action="">

                    <div class="form-group my-1">
                        <label for="">Total Bayar</label>
                        <input type="number"value="{{ $penjualan->total_harga }}" class="form-control" readonly>
                    </div>
                    <div class="form-group my-1">
                        <label for="">Uang Bayar</label>
                        <input type="number" name="uang_bayar" class="form-control" min="{{ $penjualan->total_harga }}">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Hitung</button>
                </form>
                <div class="form-group my-1">
                    <label for="">Uang Kembalian</label>
                    <input type="number" name="kembalian" class="form-control" value="{{ isset($kembalian) ? $kembalian : '' }}" readonly>
                </div>
                    @if ($kembalian!=='')
                    <a href="{{ route('penjualan.invoice', $penjualan->kode_penjualan) }}" class="btn btn-primary">Invoice</a>
                    @endif


            </div>
        </div>
    </div>
</div>

{{-- <script>
    const hargaProduk = document.querySelector('.harga-produk');
    const jumlah = document.querySelector('.jumlah');
    const subTotalText = document.querySelector('.sub-total-text');

    let subTotalValue = document.querySelector('.sub-total-value')

    function subtotal(){
        let subtotal = hargaProduk.value * jumlah.value;
        subTotalText.innerHTML = subtotal
        subTotalValue.value = subtotal
    }
</script> --}}
@endsection
