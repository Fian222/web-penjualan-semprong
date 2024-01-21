<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanandetail extends Model
{

    protected $fillable = [
        'id_barang',
        'id_pesanan',
        'jumlah_pesanan',
        'id_user',
        'total_harga',
    ];

    public function pesanan()
    {
        return $this->belongsTo(pesanan::class, 'id_pesanan', 'id');
    }

    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id');
    }
}
