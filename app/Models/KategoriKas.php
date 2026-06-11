<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriKas extends Model
{
    protected $table = 'kategori_kas';

    protected $fillable = [
        'nama_kategori',
        'tipe',
        'deskripsi',
    ];

    public function transaksiKas()
    {
        return $this->hasMany(TransaksiKas::class, 'kategori_id');
    }
}