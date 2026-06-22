<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Menu;

class TransactionController extends Controller 
{
    public function store(request $request)
    {
        $userId = $request->input('userId') ?? $request->input('userid');
        $menuId = $request->input('menuId') ?? $request->input('menuid');

        if(!$userId || !$menuId) {
            return redirect()->back()->with('error', 'User ID dan Menu ID wajib diisi!');
        }

        $menu = Menu::find($menuId);

        if(!$menu) {
            return redirect()->back()->with('error', 'Menu dengan ID' . $menuId . 'tidak ditemukan di datbase! Silahkan cek tabel meny kamu.');
        }
    
    
        $currentStamps = Transaction::where('user_id', $userId)->count();
        $stampAfter = $currentStamps + 1;

        Transaction::create([
            'user_id' => $userId,
            'menu_id' => $menuId,
            'menu_name' => 'Es Jeruk',
            'stamp_after' => $stampAfter
        ]);

         return redirect()->route('transactions.history', ['userId' => $userId])->with('success', 'Transaksi berhasil + stamp bertambah');
    }
} 

