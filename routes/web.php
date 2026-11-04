
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\AnimalCrudController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\ProfileController;

// Mainpage
Route::get('/', function () {
    return view('home');
})->name('home');

// Database
Route::get('/database', [DatabaseController::class, 'index']);

// Graph
Route::get('/graph', [GraphController::class, 'index']);

// Contact
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);

// Messages - logged-in users only
Route::get('/messages', [MessageController::class, 'index'])
    ->middleware('auth');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/crud', [AnimalCrudController::class, 'index']);
    Route::get('/crud/create', [AnimalCrudController::class, 'create']);
    Route::post('/crud', [AnimalCrudController::class, 'store']);
    Route::get('/crud/{animal}/edit', [AnimalCrudController::class, 'edit']);
    Route::put('/crud/{animal}', [AnimalCrudController::class, 'update']);
    Route::delete('/crud/{animal}', [AnimalCrudController::class, 'destroy']);
});

require __DIR__.'/auth.php';

