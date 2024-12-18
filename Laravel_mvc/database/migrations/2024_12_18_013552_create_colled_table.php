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
        Schema::create('colled', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('titulo')->nullable();
            $table->string('categoria')->nullable();
            $table->string('descricao')->nullable();
            $table->dateTime('data_criacao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colled');
    }
};
