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
        Schema::create('pet_boardings', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('pet_name');
            $table->integer('pet_age');
            $table->date('entry_date');
            $table->date('exit_date');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_boardings');
    }
};
