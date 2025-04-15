<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\HomeController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//! Home
Route::apiResource('/', HomeController::class); // apiResource -  чтобы исключить маршрут, представляющий создание и редактирование HTML-шаблонов.


//! объявления 
// список объявлений
Route::get('/ads', [AdController::class, 'list'])->name('ads.list');
// одно объявление
Route::get('/ads/{id}', [AdController::class, 'index'])->name('ad.index');