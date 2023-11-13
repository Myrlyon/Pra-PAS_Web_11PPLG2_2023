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
        Schema::create('racers', function (Blueprint $table) {
            $table->id();
            $table->integer('racer_id') -> unique();
            $table->string('racer_name');
            $table->string('nationality');
            $table->integer('age');
            $table->integer('total_wins');
            $table->date('first_race_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('racers');
    }
};
