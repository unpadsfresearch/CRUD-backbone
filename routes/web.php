<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ReviewController;

use App\Models\Film;
use App\Models\Genre;
use App\Models\Review;


Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/form', function () {
    return view('form');
})->name('form');
Route::post('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/data-tables', function () {
    return view ('data-tables');
})->name('data-tables');

//Router Middleware
Route::middleware(['auth'])->group(function () {
    //Router Cast
    Route::get('/cast', [CastController::class, 'index'])->name('cast.index');
    Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
    Route::post('/cast/store', [CastController::class, 'store'])->name('cast.store');
    Route::get('/cast/{cast_id}/show', [CastController::class, 'show'])->name('cast.show');
    Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit'])->name('cast.edit');
    Route::put('/cast/{cast_id}/update', [CastController::class, 'update'])->name('cast.update');
    Route::delete('/cast/{cast_id}/delete', [CastController::class, 'delete'])->name('cast.delete');
    //End of Middleware Auth
});

//Router Genre
Route::middleware(['auth'])->group(function () {
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');

Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');
Route::post('/genre/store', [GenreController::class, 'store'])->name('genre.store');
Route::get('/genre/{genre_id}/show', [GenreController::class, 'show'])->name('genre.show');
Route::get('/genre/{genre_id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
Route::put('/genre/{genre_id}/update', [GenreController::class, 'update'])->name('genre.update');
Route::delete('/genre/{genre_id}/delete', [GenreController::class, 'delete'])->name('genre.delete');
});

//Router Film
Route::get('/film', [FilmController::class, 'index'])->name('film.index');
Route::get('/film/{film_id}/show', [FilmController::class, 'show'])->name('film.show');
Route::get('/film/create', [FilmController::class, 'create'])->name('film.create');
Route::post('/film/store', [FilmController::class, 'store'])->name('film.store');
//Middleware Film
Route::middleware(['auth'])->group(function () {
    Route::get('/film/{film_id}/edit', [FilmController::class, 'edit'])->name('film.edit');
    Route::put('/film/{film_id}/update', [FilmController::class, 'update'])->name('film.update');
    Route::delete('/film/{film_id}/delete', [FilmController::class, 'delete'])->name('film.delete');
});

//Router Review
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
