<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Instansi extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class, 'kodeinstansi', 'kodeinstansi');
    }
    public function T0017()
    {
        //hasmany one to many
        return $this->hasMany(T007001::class);
    }
    public function T007002()
    {
        //hasmany one to many
        return $this->hasMany(T007002::class);
    }
}
