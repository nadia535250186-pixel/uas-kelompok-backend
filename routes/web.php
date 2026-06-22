<?php

use App\Models\Menu;
use App\Models\Loyalty;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect('/menu');
});

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

// Tambahan Rute Logout Baru di bawah rute login kelompokmu
Route::post('/logout', [AuthController::class, 'logout']);

// Rute asli profil kelompokmu (tetap dipertahankan agar tidak eror)
Route::get('/profile/{username}', [UserController::class, 'show'])->middleware('auth');



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