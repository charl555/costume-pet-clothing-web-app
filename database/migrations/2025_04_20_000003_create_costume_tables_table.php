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
        Schema::create('costume_tables', function (Blueprint $table) {
            $table->id('costumeId');
            $table->string('costumeName');
            $table->string('ageCategory');
            $table->string('costumeCategory');
            $table->string('description');
            $table->string('measurements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costume_tables');
    }
};
