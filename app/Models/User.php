<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getPictureAttribute($value)
    {
        if ($value) {
            return asset('users/images/' . $value);
        } else {
            return asset('users/images/no-image.png');
        }
    }

    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'kodeinstansi', 'kodeinstansi');
    }

    public function owner()
    {
        return $this->belongsTo(Instansi::class, 'kodeinstansi');
    }
    public function T007001()
    {
        return $this->hasMany(T007001::class);
    }
    public function T007002()
    {
        return $this->hasMany(T007002::class);
    }
}
