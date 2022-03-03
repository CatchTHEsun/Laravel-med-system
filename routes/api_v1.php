<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Api\V1\IndexController::class, 'index'])->name('main');
