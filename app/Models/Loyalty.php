<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loyalty extends Model
{
    protected $fillable = [
        'nama_pelanggan',
        'no_hp',
        'jumlah_stamp'
    ];
}