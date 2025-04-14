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
        // переменная $table должна быть экземпляром класса Blueprint
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // под капотом тип "bigIncrements" <- и он должен быть один
            $table->string('name');
            $table->string('slug'); // для url строки
            $table->foreignId('parent_id')->nullable()->onDelete('set null'); // или тип foreignId

            $table->timestamps();
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
