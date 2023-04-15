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
        Schema::create('stavka_narudzbines', function (Blueprint $table) {
            $table->foreignId('narudzbina_id')->constrained('narudzbinas');
            $table->foreignId('proizvod_id')->constrained('proizvods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stavka_narudzbines');
    }
};
