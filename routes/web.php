<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

//! Home
Route::get('/', [HomeController::class, 'index'])->name('home'); // будет меню категорий, и кнопка на "/ads"

//! объявления 
// список объявлений
Route::get('/ads', [AdController::class, 'list'])->name('ads.list');
// одно объявление
Route::get('/ads/{id}', [AdController::class, 'index'])->name('ad.index');


// категории
// Route::get('/articles/category/{category}', [ArticleController::class, 'category'])->name('articles.category');
// //  у каждой категории есть свои статьи (как у allo: mobilephone => объявления телефонов)
// Route::get('/articles/category/{category}/{articles}', [ArticleController::class, 'show'])->name('articles.show');
// // для тегов (логика, как у категорий) только путь /articles/tag/{nextParams}