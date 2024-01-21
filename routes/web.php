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
});

Route::get('/prize', function () {
    return view('pages.prize');
});

Route::get('/prize-one', function () {
    return view('pages.prize-one');
});

Route::get('/prize-two', function () {
    return view('pages.prize-two');
});

Route::get('/prize-three', function () {
    return view('pages.prize-three');
});

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/rules', function () {
    return view('pages.rules');
})->name('rules');

Route::get('/questions', function () {
    return view('pages.questions');
})->name('questions');

Route::get('/results', function () {
    return view('pages.results');
})->name('results');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
