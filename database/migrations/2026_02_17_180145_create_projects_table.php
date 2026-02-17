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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100);
            $table->string('languages', 50);
            $table->string('framework', 50);
            $table->string('category', 20);
            $table->string('img');
            $table->text('description');
            $table->text('descrizione');
            $table->boolean('front_end');
            $table->boolean('back_end');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
