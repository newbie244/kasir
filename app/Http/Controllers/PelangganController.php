<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::latest()->paginate(5);
        return view("pelanggan.index", compact("pelanggan"));
    }

    public function create()
    {
        return view("pelanggan.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama"=> "required",
            "alamat"=> "required",
            "telp"=> "required"
        ]);

        $pelanggan = Pelanggan::create([
            "nama"=> $request->nama,
            "alamat"=> $request->alamat,
            "telp"=> $request->telp,
        ]);
        return redirect('/pelanggan')->with("berhasil ditambahkan");
    }

    public function edit(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view("pelanggan.edit", compact("pelanggan"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nama"=> "required",
            "alamat"=> "required",
            "telp"=> "required",
            ]);
            $pelanggan = Pelanggan::findOrFail($id);
            $pelanggan->update([
                "nama"=> $request->nama,
                "alamat"=> $request->alamat,
                "telp"=> $request->telp

            ]);
            return redirect('/pelanggan')->with("succes","berhasil di update");

    }
    public function delete($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();
        return redirect("/pelanggan")->with("succes","berhasil di hapus");
    }
}
