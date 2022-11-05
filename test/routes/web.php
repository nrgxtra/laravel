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
Route::get('/blog/create', [PostController::class, 'create']);
Route::post('/blog', [PostController::class, 'store']);
Route::get('/blog/{post}/edit',[PostController::class, 'edit']);
Route::put('/blog/{post}',[PostController::class, 'update']);
Route::delete('/blog/{post}',[PostController::class, 'destroy']);

Route::get('/blog/{post}', [PostController::class, 'show']);
