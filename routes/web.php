<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\RedeemController;


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
    $menu = \App\Models\Menu::find($id);
    return view('edit', compact('menu'));
});

Route::post('/menu/update/{id}', function (Request $request, $id) {
    $menu = \App\Models\Menu::find($id);

    $menu->update([
        'nama_menu' => $request->nama_menu
    ]);

    return redirect('/menu');
});

Route::get('/rewards', [RewardController::class, 'index']);
Route::post('/redeem', [RedeemController::class, 'store']);
Route::get('/', function () {
    return redirect('/rewards');
});