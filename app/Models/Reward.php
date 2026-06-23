<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $table = 'rewards';
    protected $fillable = [
        'nama_reward',
        'point_required',
    ];
}
