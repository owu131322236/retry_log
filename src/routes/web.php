<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function (){
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // タイムライン(ホーム画面)
    Route::get('/timeline', [TimelineController::class, 'index'])->name('timeline');
});
Route::get('/challenges', function () {
    return view('challenges/index');
})->name('challenges');
require __DIR__.'/auth.php';

Route::get('/progress', function () {
    return view('progress');
})->name('progress');

Route::get('/mypage', function () {
    return view('mypage');
})->name('mypage');
Route::get('/post-show', function () {
    return view('post-show');
})->name('post-show');
Route::get('/post-create', function () {
    return view('post-create');
})->name('post-create');
Route::get('/challenge-all', function () {
    return view('challenges/all');
})->name('challenge-all');