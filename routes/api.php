<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('vaccines', VaccineController::class);
});
