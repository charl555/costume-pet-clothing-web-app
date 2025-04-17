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
        Schema::create('costume3d_models', function (Blueprint $table) {
            $table->id('costume3dModelID');
            $table->string('costumeName');
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('file_path');
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costume3d_models');
    }
};
