<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/solve', function () {
    return view('solve');
});

Route::get('/dashboard', function () {

});
