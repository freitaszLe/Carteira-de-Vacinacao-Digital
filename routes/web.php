<?php
use App\Http\Controllers\VaccineController;
use Illuminate\Support\Facades\Route;

// Rota pública para teste
Route::get('/', [VaccineController::class, 'index']);

Route::get('/dashboard', function(){
    return view('dashboard');
});

// Rotas que exigem login
Route::middleware(['auth'])->group(function () {
    Route::resource('vaccines', VaccineController::class)->except(['show']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
