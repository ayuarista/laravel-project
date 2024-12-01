<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\MenuController;
use App\Http\Controllers\Web\AdditionalController;
use App\Http\Controllers\Web\VariantController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('menu', MenuController::class);
Route::resource('additional', AdditionalController::class);
Route::resource('variant', VariantController::class);
