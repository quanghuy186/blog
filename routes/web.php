<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BlogController::class, 'index']);

Route::get('/create', [BlogController::class, 'create'])->name('blog.create');