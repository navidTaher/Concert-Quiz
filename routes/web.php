<?php

use App\Http\Controllers\ProfileController;
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
})->name('welcome');

Route::get('/scores', function () {
    return view('pages.guests.scores');
})->name('scores');

Route::get('/message', function () {
    return view('pages.guests.message');
})->name('message');

Route::get('/prize', function () {
    return view('pages.guests.prize');
})->name('prize');

Route::get('/prize-one', function () {
    return view('pages.guests.prize-one');
})->name('prize-1');

Route::get('/prize-two', function () {
    return view('pages.guests.prize-two');
})->name('prize-2');

Route::get('/prize-three', function () {
    return view('pages.guests.prize-three');
})->name('prize-3');

Route::get('/terms', function () {
    return view('pages.guests.terms');
})->name('terms');

Route::get('/rules', function () {
    return view('pages.guests.rules');
})->name('rules');

Route::get('/questions', function () {
    return view('pages.guests.questions');
})->name('questions');

Route::get('/results', function () {
    return view('pages.guests.results');
})->name('results');



Route::get('/admin-questions', function () {
    return view('pages.admin.admin-questions');
})->middleware(['auth', 'verified'])->name('admin-questions');

Route::get('/admin-participents', function () {
    return view('pages.admin.admin-participents');
})->middleware(['auth', 'verified'])->name('admin-participents');

Route::get('/admin-winners', function () {
    return view('pages.admin.admin-winners');
})->middleware(['auth', 'verified'])->name('admin-winners');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
