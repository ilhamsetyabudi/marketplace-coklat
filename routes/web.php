<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Home (pakai File::files untuk ambil gambar gallery)
Route::get('/', function () {
    $galleryImages = File::files(public_path('assets/shop'));

    return view('home.index', [
        'galleryImages' => $galleryImages
    ]);
})->name('home');

// Halaman Tentang
Route::get('/about', function () {
    return view('home.about');
})->name('about');

// Halaman Belanja (shop.index)
Route::get('/belanja', function () {
    return view('shop.index');
})->name('shop');

// Alternatif kalau mau pakai Controller (kalau PageController dipakai):
// Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/belanja', [PageController::class, 'belanja'])->name('belanja');

// Dashboard bawaan Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profil (bawaan Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
