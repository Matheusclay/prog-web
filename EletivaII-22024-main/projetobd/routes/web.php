<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\QuartosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\EstadiaController;
use App\Http\Controllers\GraficoController;




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
    Route::get('/grafico-ocupacao', [DashboardController::class, 'ocupacao'])->name('grafico.ocupacao');
    Route::resource('hospedes', HospedeController::class);
    Route::resource('reservas', ReservaController::class);
    Route::resource('estadias', EstadiaController::class);
    Route::get('/grafico-ocupacao', [GraficoController::class, 'ocupacao'])->name('grafico.ocupacao');

});

require __DIR__.'/auth.php';
