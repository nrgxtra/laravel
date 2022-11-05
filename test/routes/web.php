<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/blog', [PostController::class, 'store'])->middleware('auth');
Route::get('/blog/{post}/edit',[PostController::class, 'edit'])->middleware('auth');
Route::put('/blog/{post}',[PostController::class, 'update'])->middleware('auth');
Route::delete('/blog/{post}',[PostController::class, 'destroy'])->middleware('auth');
Route::get('/blog/manage', [PostController::class, 'manage'])->middleware('auth');
Route::get('/blog/{post}', [PostController::class, 'show']);

