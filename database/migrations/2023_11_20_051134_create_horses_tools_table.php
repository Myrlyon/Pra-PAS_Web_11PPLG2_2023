<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('horses_tools', function (Blueprint $table) {
            $table->id();
            $table->integer('tool_number') -> unique();
            $table->string('name');
            $table->string('function');
            $table->integer('stock');
            $table->integer('price');
            $table->date('date_buyyed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horses_tools');
    }
};
