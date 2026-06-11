<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = [
        'nama_kegiatan',
        'anggaran_direncanakan',
        'tanggal_pelaksanaan',
    ];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'kegiatan_user',
            'kegiatan_id',
            'user_id'
        )->withPivot('peran_kegiatan');
    }
}