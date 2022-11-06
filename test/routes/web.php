<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home']);

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
Route::get('/blog/create', [PostController::class, 'create'])->middleware('role:writer|admin');
Route::post('/blog', [PostController::class, 'store'])->middleware('role:writer|admin');
Route::get('/blog/{post}/edit',[PostController::class, 'edit'])->middleware('role:writer|admin');
Route::put('/blog/{post}',[PostController::class, 'update'])->middleware('role:writer|admin');
Route::delete('/blog/{post}',[PostController::class, 'destroy'])->middleware('role:writer|admin');
Route::get('/blog/manage', [PostController::class, 'manage'])->middleware('role:writer|admin');
Route::get('/blog/{post}', [PostController::class, 'show']);

