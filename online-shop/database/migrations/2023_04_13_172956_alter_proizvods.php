<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProizvods extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('proizvods', function (Blueprint $table) {
            $table->renameColumn('nazvi', 'naziv');
            $table->foreignId('vrsta_id')->constrained('vrstas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proizvods', function (Blueprint $table) {
            $table->renameColumn('naziv', 'nazvi');
        });
    }
}