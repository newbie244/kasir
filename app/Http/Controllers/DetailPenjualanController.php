<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    public function create(Request $request){
        $sub_total = $request->jumlah * $request->harga;
        
        DetailPenjualan::create([
            'id_produk' => $request->id_produk,
            'kode_penjualan' => $request->kode_penjualan,
            'jumlah' => $request->jumlah,
            'sub_total' => $sub_total
        ]);
        $penjualan = Penjualan::where('kode_penjualan','=',$request->kode_penjualan)->get()->first();
        $penjualan->update([
            'total_harga' => $sub_total + $penjualan->total_harga
        ]);
        return redirect()->route('penjualan.edit', $request->kode_penjualan);
    }

    public function delete($id){
        $detail_penjualan = DetailPenjualan::find($id);
        dd($detail_penjualan);
        $detail_penjualan->delete();
        return redirect()->route('penjualan.edit')->with("succes","berhasil di hapus");
    }
}
