<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'telp',
    ];

    protected $primaryKey = 'id_pelanggan';
    // public function penjualans(){
    //     return $this->hasMany(Penjualan::class, 'id_pelanggan','id_pelanggan');
    // }
}
