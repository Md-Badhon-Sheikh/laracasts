<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['posts' => Post::all()]);
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/create', [PostController::class, 'create']);

Route::post('/store', [PostController::class, 'fileStore'])->name('store');

Route::get('/edit/{id}', [PostController::class, 'fileEdit'])->name('edit');

Route::post('/update/{id}', [PostController::class, 'fileUpdate'])->name('update');

Route::get('/delete/{id}', [PostController::class, 'fileDelete'])->name('delete');