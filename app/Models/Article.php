<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // ячейки полей, которые мы можем заполнять, изменять и тд. (например: id - генерируется автоматически)
    protected $fillable = [
        'title',
        'slug',
        'preview_image',
        'detail_image',
        'preview_text',
        'detail_text',
        'tags',
        'category_id',
        'published_at',
        'active'
    ];
    // чтобы laravel автоматически преобразовывал в типы данных
    protected $casts = [
        'tags' => 'json',
        'published_at' => 'datetime',
        'active' => 'boolean'
    ];
}
