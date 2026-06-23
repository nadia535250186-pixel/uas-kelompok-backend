<?php

namespace App\Http\Controllers;

use App\Models\Redeem;
use Illuminate\Http\Request;

class RedeemController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string',
            'reward_id' => 'required|exists:rewards,id',
        ]);

        Redeem::create([
            'user_name' => $request->user_name,
            'reward_id' => $request->reward_id,
        ]);

        return redirect('/rewards')->with('success', 'Redeem berhasil!');
    }
}