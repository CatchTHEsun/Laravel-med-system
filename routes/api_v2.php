<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Api\V2\IndexController::class, 'index'])->name('main');
Route::get('/all', [\App\Http\Controllers\Api\V2\IndexController::class, 'all'])->name('all');
