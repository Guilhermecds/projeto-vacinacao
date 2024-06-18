<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [loginController::class, 'login'])->name('login.submit')->middleware('login.auth');;