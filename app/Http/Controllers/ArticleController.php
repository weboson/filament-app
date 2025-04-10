<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // список статей
    public function index()
    {
        return 'index article1';
    }

    // список категорий
    public function category($category) // значение параметра $category присваиваем в web.php -> 
    {
        return 'category article' . ' значение из url:' . $category;
    }

    // статья полносью (относящая к конкретной категории)
    public function show($category, $article) // $category - категория, $article - статья относящая к данной категории
    {
        return 'show article' . ' категория: ' . $category . ' статьи этой категории: ' . $article;
    }

    // для тегов (список)
    public function tag($tag)
    {
        return 'tag article' . ' tag: ' . $tag;
    }
}
