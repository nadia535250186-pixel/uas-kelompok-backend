<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reward;

class Redeem extends Model
{
    protected $fillable = [
        'user_name',
        'reward_id',
    ];

    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }
}
