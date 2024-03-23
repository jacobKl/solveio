<?php

use App\Http\Controllers\ScrambleController\ScrambleController;
use App\Http\Controllers\SolveController\SolveController;
use App\Http\Middleware\EnsureTrainingInProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/new-scramble', [ScrambleController::class, 'getScramble']);

Route::post('/solve', [SolveController::class, 'store'])
    ->middleware(EnsureTrainingInProgress::class);
