<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_produk',
        'kode_penjualan',
        'jumlah',
        'sub_total'
    ];

    protected $primaryKey = 'id_detail';

    public function produk(){
        return $this->belongsTo(Produk::class,'id_produk','id_produk');
    }
}
