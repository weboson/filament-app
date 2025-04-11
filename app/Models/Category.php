<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'parent_id'];

    // метод будет вызываться для ПОДКАТЕГОРИИ (у которой будет родитель КАТЕГОРИЯ)
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // для КАТЕГОРИИ (родителя)
    public function parent()
    {
        return $this->belongsTo(Category::class, ); // поле 'parent_id' - указывать не обязательно, потому что: Laravel автоматически связывает поле parent_id с методом hasMany() и методом belongsTo().
    }
}
