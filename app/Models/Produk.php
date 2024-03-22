<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_produk',
        'nama',
        'stok',
        'harga'
    ];
    protected $guarded = ['id_produk'];
    protected $primaryKey = 'id_produk';
    // public function penjualans(){
    //     return $this->belongsToMany(Penjualan::class, 'detail_penjualans','id_produk','kode_penjualan');
    // }
}
