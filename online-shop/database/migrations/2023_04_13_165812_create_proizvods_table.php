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
        Schema::create('proizvods', function (Blueprint $table) {
            $table->id();
            $table->string('nazvi');
            $table->string('slika');
            $table->string('opis');
            $table->integer('cena');
            $table->string('energetski_razred');
            $table->string('boja');
            $table->string('materijal');
            $table->string('dimenzije');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proizvods');
    }
};
