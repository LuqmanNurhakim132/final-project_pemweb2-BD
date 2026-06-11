<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function transaksiKas()
    {
        return $this->hasMany(TransaksiKas::class);
    }

    public function reimburseRequests()
    {
        return $this->hasMany(ReimburseRequest::class);
    }


    public function kegiatan()
    {
        return $this->belongsToMany(
            Kegiatan::class,
            'kegiatan_user',
            'user_id',
            'kegiatan_id'
        )->withPivot('peran_kegiatan');
    }


    public function biodata()
    {
        return $this->hasOne(BiodataUser::class);
    }
}