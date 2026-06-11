<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiKas extends Model
{
    protected $table = 'transaksi_kas';

    protected $fillable = [
        'user_id',
        'kategori_id',
        'nominal',
        'tanggal',
        'bukti_gambar',
        'keterangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriKas::class, 'kategori_id');
    }
}