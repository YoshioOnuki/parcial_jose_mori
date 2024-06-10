<?php

use App\Livewire\Auth\Login;
use App\Livewire\Home\Index as HomeIndex;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::get('/login', Login::class)
    ->middleware('guest')
    ->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', HomeIndex::class)
        ->name('home');

});
