<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// список статей
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// категории
Route::get('/articles/tag/{tag}', [ArticleController::class, 'tag'])->name('articles.tag');
Route::get('/articles/category/{category}', [ArticleController::class, 'category'])->name('articles.category');
//  у каждой категории есть свои статьи (как у allo: mobilephone => объявления телефонов)
Route::get('/articles/category/{category}/{articles}', [ArticleController::class, 'show'])->name('articles.show');
// для тегов (логика, как у категорий) только путь /articles/tag/{nextParams}