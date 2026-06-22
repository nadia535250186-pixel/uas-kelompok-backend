<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class HistoryController extends Controller
{
    public function show($userId)
    {
        $transactions = Transaction::where('user_id', $userId)->get();
        $totalStamp = Transaction::where('user_id', $userId)->max('stamp_after') ?? 0;

        return view('transactions.history', compact('transactions', 'userId', 'totalStamp'));
    }
}