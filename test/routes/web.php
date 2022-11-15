<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
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
    Route::get('/role', [AdminController::class, 'giveRole'])->name('give_role');
    Route::post('/role/set', [AdminController::class, 'setRole'])->name('set_role');
    Route::post('/role/remove', [AdminController::class, 'deleteRole'])->name('remove_role');

    Route::controller(App\Http\Controllers\admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'save');
        Route::post('/category/{category}', 'destroy');
    });

    Route::controller(App\Http\Controllers\admin\ServiceController::class)->group(function () {
        Route::get('/service', 'index');
        Route::get('/service/create', 'create');
        Route::post('/service', 'store');
        Route::get('/service/{service}/edit', 'edit');
        Route::put('/service/{service}', 'save');
        Route::post('/service/{service}', 'destroy');
        Route::post('/service/{id}/pic', 'del');
    });

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


Route::prefix('services')->group(function (){
    Route::get('/', [ServicesController::class, 'index']);
    Route::get('/{id}', [ServicesController::class, 'show']);
});
