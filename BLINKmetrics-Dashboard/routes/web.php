<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\MapController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [APIController::class, 'index']);