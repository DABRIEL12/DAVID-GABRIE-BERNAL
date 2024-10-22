<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfraccionController;

Route::get('/', function () {
    return view('plantilla.app');
});

Route::resource('infracciones', InfraccionController::class);
