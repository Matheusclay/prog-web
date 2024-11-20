<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\QuartosController;
use App\Http\Controllers\ReservaController;




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
    Route::resource('quarto', QuartosController::class);
    Route::get('/quarto/{id}/edit', [QuartosController::class, 'edit']);
    Route::put('/quarto/{id}', [QuartosController::class, 'update']);
    Route::delete('/quarto/{id}', [QuartosController::class, 'destroy']);
    Route::resource('/reserva', ReservaController::class);
    Route::get('/reserva/{id}/edit', [ReservaController::class, 'edit'])->name('reserva.edit');
    Route::put('/reserva/{id}', [ReservaController::class, 'update'])->name('reserva.update');
    Route::delete('/reserva/{id}', [ReservaController::class, 'destroy'])->name('reserva.destroy');

    

});

require __DIR__.'/auth.php';
