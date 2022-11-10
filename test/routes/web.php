<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home']);
Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::prefix('admin')->middleware('role:Super Admin')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin');
});
Route::prefix('blog')->group(function (){
    Route::get('/', [PostController::class, 'index']);
    Route::get('/create', [PostController::class, 'create'])->middleware('role:writer|admin|Super Admin');
    Route::post('/', [PostController::class, 'store'])->middleware('role:writer|admin|Super Admin');
    Route::get('/{post}/edit',[PostController::class, 'edit'])->middleware('role:writer|admin|Super Admin');
    Route::put('/{post}',[PostController::class, 'update'])->middleware('role:writer|admin|Super Admin');
    Route::delete('/{post}',[PostController::class, 'destroy'])->middleware('role:writer|admin|Super Admin');
    Route::get('/manage', [PostController::class, 'manage'])->middleware('role:writer||Super Admin');
    Route::get('/{post}', [PostController::class, 'show'])->name('show');
    Route::post('/like/{id}', [PostController::class, 'like'])->middleware('auth');
    Route::post('/comment/create/{id}', [CommentController::class, 'addComment'])->middleware('auth');
    Route::get('/comment/{id}/edit', [CommentController::class, 'editComment'])->middleware('auth');
    Route::put('/comment/{id}', [CommentController::class, 'updateComment'])->middleware('auth');
    Route::delete('/comment/delete/{id}', [CommentController::class, 'deleteComment'])->middleware('auth');
});



