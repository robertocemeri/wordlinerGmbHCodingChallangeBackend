<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/properties',[ApiController::class, 'index'])->name('properties.index');
Route::post('/properties',[ApiController::class, 'store'])->name('properties.store');
Route::delete('/properties/{property}',[ApiController::class, 'destroy'])->name('properties.destroy');
