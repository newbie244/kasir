<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;


class InvoiceController extends Controller
{
    public function invoice($kode_penjualan){
        $detail_penjualan = Penjualan::with("pelanggan")->where("kode_penjualan", $kode_penjualan)->first();
        $detail_produk = DetailPenjualan::with(['produk'])->where('kode_penjualan',$kode_penjualan)->get();

        return view('penjualan.invoice.nota',compact('detail_penjualan','detail_produk'));
    }
}
