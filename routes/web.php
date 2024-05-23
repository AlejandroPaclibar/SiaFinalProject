<?php

use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', function(){
    return Inertia('Home');
});

Route::get('/qrcode', function(){
    return Inertia::render('QrCode');
});

Route::inertia('portfolio', 'Portfolio');

Route::get('/artworks',[ArtworkController::class, 'index']);

Route::get('artworks/csv-all', [ArtworkController::class, 'generateCSV']);
// Route::resource('artworks', ArtworkController::class);

Route::get('artworks/pdf', [ArtworkController::class, 'pdf']);
Route::post('/artworks/import',[ArtworkController::class, 'import'])->name('artworks.import');

require __DIR__.'/auth.php';
