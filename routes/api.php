<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

// Endpoint Ambil Profil Spesifik Berdasarkan Parameter Username
Route::get('/users/{username}', [UserController::class, 'show']);