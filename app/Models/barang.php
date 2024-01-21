<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = [
        'nama_barang',
        'harga_barang',
        'stok_barang',
        'gambar',
        'id_admin',
    ];
    public function pesanan()
    {
        return $this->hasMany(pesanan::class, 'id_barang', 'id');
    }

    public function pembayaran()
    {
        return $this->hasMany(pembayaran::class, 'id_barang', 'id');
    }
}
