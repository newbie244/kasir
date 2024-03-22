<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Produk;

class PenjualanController extends Controller
{
    public function index(){
        $penjualan = Penjualan::all();
        return view('penjualan.index',compact('penjualan'));
    }
    public function pelanggan(){
        $pelanggan = Pelanggan::all();
        return view('penjualan.pelanggan',compact('pelanggan'));
    }
    public function create($id){
        $pelanggan = Pelanggan::findOrFail($id);
        $penjualanNew = Penjualan::latest()->first();
        if ($penjualanNew==null) {
           $penjualanNew = 0;
        }else{
            $penjualanNew = $penjualanNew->id_penjualan;
        }

        $penjualan = Penjualan::create([
            "id_user"=>1,
            "id_pelanggan"=>$id,
            'kode_penjualan' => "NOT" . $id . $penjualanNew + 1
        ]);
        return redirect()->route('penjualan.edit',$penjualan->kode_penjualan);
    }

    public function edit($kode_penjualan){
        $pelanggan = Penjualan::with('pelanggan')->where('kode_penjualan',$kode_penjualan)->first();
        $produk = Produk::all();
        $detail_penjualan = DetailPenjualan::with(['produk'])->where('kode_penjualan',$kode_penjualan)->get();
        $d_produk = Produk::find(request('id_produk'));
        $penjualan = Penjualan::where('kode_penjualan', $kode_penjualan)->get()->first();

        $uang_bayar = request('uang_bayar');
        $penjualan->update([
            'bayar' => $uang_bayar
        ]);

        $kembalian =  $uang_bayar - $penjualan->total_harga;
        if ($kembalian<0) {
            $kembalian = '';
        }

        return view('penjualan.create', compact('pelanggan','produk','d_produk','kode_penjualan','detail_penjualan','penjualan','kembalian'));
    }
    

}
