<?php

use App\Livewire\UsersCreate;
use App\Livewire\UsersTable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


Route::get('/usuarios', UsersTable::class)->name('user.table');
Route::get('/usuarios/create/{id?}', UsersCreate::class)->name('user.create');


});
