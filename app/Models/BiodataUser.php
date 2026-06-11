<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiodataUser extends Model
{
    protected $table = 'biodata_user';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
