<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
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

    Route::controller(App\Http\Controllers\admin\TeamController::class)->group(function () {
        Route::get('/team', 'index');
        Route::get('/team/create', 'create');
        Route::post('/team', 'store');
        Route::get('/team/{member}/edit', 'edit');
        Route::put('/team/{member}', 'save');
        Route::post('/team/{member}', 'destroy');
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

    Route::controller(App\Http\Controllers\admin\PackageController::class)->group(function () {
        Route::get('/package', 'index');
        Route::get('/package/create', 'create');
        Route::post('/package', 'store');
        Route::get('/package/{package}/edit', 'edit');
        Route::put('/package/{package}', 'update');
        Route::post('/package/{package}', 'destroy');
    });

    Route::controller(App\Http\Controllers\admin\GalleryController::class)->group(function () {
        Route::get('/gallery', 'index');
        Route::get('/gallery/create', 'create');
        Route::post('/gallery', 'store');
        Route::get('/gallery/{gallery}/edit', 'edit');
        Route::put('/gallery/{gallery}', 'save');
        Route::post('/gallery/{gallery}', 'destroy');
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
    Route::get('/', [ServicesController::class, 'index'])->name('services.index');
    Route::get('/{id}', [ServicesController::class, 'show'])->name('services.show');
    Route::post('/', [ServicesController::class, 'show']);
});

Route::prefix('contact')->group(function (){
    Route::get('/', [ContactController::class, 'index'])->middleware('auth');
    Route::post('/', [ContactController::class, 'store'])->middleware('auth');
});

Route::resource('booking-form', BookingController::class)->middleware('auth');

Route::prefix('common')->group(function (){
    Route::get('/about', [CommonController::class, 'about']);
    Route::get('/gallery', [CommonController::class, 'gallery']);
});

