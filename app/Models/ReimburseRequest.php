<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReimburseRequest extends Model
{
    protected $table = 'reimburse_requests';

    protected $fillable = [
        'user_id',
        'judul_reimburse',
        'nominal',
        'deskripsi',
        'bukti_nota',
        'status',
        'tanggal_pengajuan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}