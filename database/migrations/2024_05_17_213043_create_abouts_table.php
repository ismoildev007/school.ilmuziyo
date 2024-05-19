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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('description_uz')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->text('sciences_uz')->nullable();
            $table->text('sciences_ru')->nullable();
            $table->text('sciences_en')->nullable();
            $table->text('language_uz')->nullable();
            $table->text('language_ru')->nullable();
            $table->text('language_en')->nullable();
            $table->text('big_language_uz')->nullable();
            $table->text('big_language_ru')->nullable();
            $table->text('big_language_en')->nullable();
            $table->text('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
