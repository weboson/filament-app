<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    // ячейки полей, которые мы можем заполнять, изменять и тд.
    protected $fillable = [
        'title',
        'slug',
        'active'
    ];

    // чтобы laravel автоматически преобразовывал в типы данных
    protected $casts = [
        'active' => 'boolean',
    ];

}
