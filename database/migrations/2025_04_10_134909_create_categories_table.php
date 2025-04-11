<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique(); //unique() - проверка на уникальность. должен быть уникальным
            $table->integer('parent_id')->nullable(); 
            $table->timestamps();

            // рекомендации ИИ Алиса
            $table->foreign('parent_id') // указал внешний ключ
                ->references('id') // с каким полем будет связан этот ключ
                ->on('categories') // какой таблицы
                ->onDelete('set null'); // какое значение будет, если подкатегория будет удалена
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
