<?php

use App\Http\Controllers\ScrambleController\ScrambleController;
use App\Http\Controllers\SolveController\SolveController;
use App\Http\Middleware\EnsureTrainingInProgress;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/new-scramble', [ScrambleController::class, 'getScramble']);
    Route::post('/choose-cube', [SolveController::class, 'chooseCube']);
    Route::post('/solve', [SolveController::class, 'store'])
        ->middleware(EnsureTrainingInProgress::class);
});
