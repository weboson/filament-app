<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    // заполняемые ячейки
    protected $fillable = [
        'title',
        'slug',
        'image',
        'text',
        'category_id',
        'published_at',
    ];
}
