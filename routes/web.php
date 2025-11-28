<?php
use App\Http\Controllers\FeedController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/feed', [FeedController::class, 'index'])->name('feed');

    //post routes
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

    // Profile routes
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
