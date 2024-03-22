<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_penjualan',
        'tanggal',
        'total_harga',
        'id_user',
        'id_pelanggan',
        'bayar'
    ];

    protected $primaryKey = 'id_penjualan';
    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class,'id_pelanggan','id_pelanggan');
    }
}
