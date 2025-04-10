<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. 
     *! когда происходит миграция: создается описанная здесь таблица,
     сами модели, для заполнения этих таблиц находятся в App/Models,
     а для управления ими в папке Filament/
     */
    public function up(): void
    {
        Schema::create('article_categories', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug');
            $table->boolean('active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_categories');
    }
};
