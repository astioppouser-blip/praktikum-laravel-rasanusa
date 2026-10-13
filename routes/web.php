<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KulinerController;

Route::get('/', [KulinerController::class, 'home'])
    ->name('home');

Route::get('/kuliner', [KulinerController::class, 'index'])
    ->name('kuliner.index');

Route::get('/kuliner/{slug}', [KulinerController::class, 'show'])
    ->name('kuliner.show');