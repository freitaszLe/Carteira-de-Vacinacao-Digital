<?php
use App\Http\Controllers\VaccineController;
use Illuminate\Support\Facades\Route;

// Rota pública para teste
Route::get('/', [VaccineController::class, 'index']);

// Rotas que exigem login
Route::middleware(['auth'])->group(function () {
    Route::resource('vaccines', VaccineController::class)->except(['show']);
});
