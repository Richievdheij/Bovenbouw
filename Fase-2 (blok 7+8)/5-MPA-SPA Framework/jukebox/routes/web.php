<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaylistController;


use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistSongController;

use App\Http\Controllers\GenreController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/liedjes/{songId}/add', [PlaylistSongController::class, 'voegNummerToeTotSpeellijst'])->middleware(['auth', 'verified']);

Route::get('/genres', [GenreController::class, 'index'])->middleware(['auth', 'verified'])->name("genres");

Route::get('/liedjes/{songid}', [SongController::class, 'laatBepaaldeLijstZien'])->middleware(['auth', 'verified']);

Route::get('/playlisten/{playlistId}', [PlaylistController::class, 'laatBepaaldeLijstZien'])->middleware(['auth', 'verified']);

Route::post('/playlisten/create', [PlaylistController::class, 'playlistAanmaken'])->middleware(['auth', 'verified'])->name("playlistAanmaken");

Route::get('/liedjes', [SongController::class, 'index'])->middleware(['auth', 'verified'])->name("liedjes");

Route::get('/genre/{genreId}', [GenreController::class, 'laatBepaaldeLijstZien'])->middleware(['auth', 'verified']);

Route::get('/playlisten', [PlaylistController::class, 'index'])->middleware(['auth', 'verified'])->name("playlijsten");


require __DIR__.'/auth.php';
