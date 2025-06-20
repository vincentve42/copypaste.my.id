<?php

use App\Http\Controllers\HomePage;
use App\Http\Middleware\Cek;
use Illuminate\Support\Facades\Route;

Route::withoutMiddleware([Cek::class])->group(function () {
    Route::get('/register', [HomePage::class, 'RegisterForm'])->name('register.form');
    Route::get('/login', [HomePage::class, 'LoginForm'])->name('login.form');
    
});

Route::post('/register', [HomePage::class,'Register'])->name('register');
Route::post('/login', [HomePage::class,'Login'])->name('login');
Route::get('/paste', [HomePage::class,'NewPasteUi'])->name('paste');
Route::post('/paste', [HomePage::class,'Paste'])->name('new-paste');
Route::get('/', [HomePage::class, 'Dashboard'])->name('dash.ui');
Route::get('/account', [HomePage::class, 'MyAcc'])->name('account');
Route::get('/find-paste/{id}', [HomePage::class, 'FindPaste'])->name('FindPaste');
Route::get('/password/{id}', [HomePage::class, 'Password'])->name('PasswordUi');
Route::post('/password/{id}', [HomePage::class, 'HasPassword'])->name('SecretCode');
