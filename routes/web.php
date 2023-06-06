<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/products', [PostController::class, 'index']);
Route::inertia('/about','About')->name('pages.about');
