<?php

namespace App\Models\Tables;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class T007001 extends Model
{
    use HasApiTokens, HasFactory, Notifiable;



    protected $guarded = [
        'id'
    ];


    public function owner()
    {
        return $this->belongsTo(Instansi::class, 'kodeinstansi');
    }
}
