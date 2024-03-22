<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->paginate(5);
        return view("produk.index", compact("produk"));
    }

    public function create()
    {
        return view("produk.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama"=> "required",
            "harga"=> "required",
            "stok"=> "required",
            "kode_produk" => "required"
        ]);

        $produk = Produk::create([
            "nama"=> $request->nama,
            "stok"=> $request->stok,
            "harga"=> $request->harga,
            "kode_produk"=> $request->kode_produk,
        ]);
        return redirect('/produk')->with("berhasil ditambahkan");
    }

    public function edit(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        return view("produk.edit", compact("produk"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nama"=> "required",
            "harga"=> "required",
            "stok"=> "required",
            "kode_produk"=> "required",
            ]);
            $produk = Produk::findOrFail($id);
            $produk->update([
                "nama"=> $request->nama,
                "stok"=> $request->stok,
                "harga"=> $request->harga,
                "kode_produk"=> $request->kode_produk
            ]);
            return redirect('/produk')->with("succes","berhasil di update");

    }
    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect("/produk")->with("succes","berhasil di hapus");
    }
}
