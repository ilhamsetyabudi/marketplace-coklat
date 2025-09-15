<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home.index'); // Halaman Home
})->name('home');

Route::get('/about', function () {
    return view('home.about'); // Halaman Tentang (jika kamu pisahkan ke about.blade.php)
})->name('about');

Route::get('/belanja', function () {
    return view('shop.index'); // Halaman Belanja
})->name('shop');

// Route dashboard bawaan Breeze (optional)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function () {
    $galleryImages = File::files(public_path('assets/shop'));

    return view('home.index', [
        'galleryImages' => $galleryImages
    ]);
})->name('home');


// Route profil bawaan Breeze (opsional juga)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
