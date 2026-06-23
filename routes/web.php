<?php

use App\Models\Menu;
use App\Models\Loyalty;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\RedeemController;

// Rute Default ke Menu
Route::get('/', function () {
    return redirect('/menu');
});

// === FITUR MENU ===
Route::get('/menu', function () {
    $menu = Menu::all();
    return view('menu', compact('menu'));
});

Route::post('/menu', function (Request $request) {
    Menu::create([
        'nama_menu' => $request->nama_menu
    ]);
    return redirect('/menu');
});

Route::get('/menu/delete/{id}', function ($id) {
    $menu = Menu::find($id);
    $menu->delete();
    return redirect('/menu');
});

Route::get('/menu/edit/{id}', function ($id) {
    $menu = Menu::find($id);
    return view('edit', compact('menu'));
});

Route::post('/menu/update/{id}', function (Request $request, $id) {
    $menu = Menu::find($id);
    $menu->update([
        'nama_menu' => $request->nama_menu
    ]);
    return redirect('/menu');
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/profile/{username}', [UserController::class, 'show'])->middleware('auth');

// === FITUR LOYALTY STAMP ===
Route::get('/loyalty', function () {
    $loyalties = Loyalty::all();
    return view('loyalty.index', compact('loyalties'));
});

Route::get('/loyalty/add', function () {
    return view('loyalty.add');
});

Route::post('/loyalty', function (Request $request) {
    Loyalty::create([
        'nama_pelanggan' => $request->nama_pelanggan,
        'no_hp' => $request->no_hp,
        'jumlah_stamp' => $request->jumlah_stamp
    ]);
    return redirect('/loyalty');
});

Route::get('/loyalty/edit/{id}', function ($id) {
    $loyalty = Loyalty::find($id);
    return view('loyalty.edit', compact('loyalty'));
});

Route::post('/loyalty/update/{id}', function (Request $request, $id) {
    $loyalty = Loyalty::find($id);
    $loyalty->update([
        'nama_pelanggan' => $request->nama_pelanggan,
        'no_hp' => $request->no_hp,
        'jumlah_stamp' => $request->jumlah_stamp
    ]);
    return redirect('/loyalty');
});

Route::get('/loyalty/delete/{id}', function ($id) {
    $loyalty = Loyalty::find($id);
    if ($loyalty) {
        $loyalty->delete();
    }
    return redirect('/loyalty');
});

Route::get('/transactions', function() {
    return view('transactions.create');
}); 

Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('transactions/{userId}', [HistoryController::class, 'show'])->name('transactions.history');

Route::delete('transactions/{id}', function ($id) {
    \App\Models\Transaction::destroy($id);
    return redirect()->back();
}); 

Route::get('/rewards', [RewardController::class, 'index']);
Route::post('/redeem', [RedeemController::class, 'store']);