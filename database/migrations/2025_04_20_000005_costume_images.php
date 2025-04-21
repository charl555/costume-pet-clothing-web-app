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
        Schema::create('costume_images', function (Blueprint $table) {
            $table->id('costumeimageId');
            $table->foreignId('costumeId')
            ->constrained('costume_tables', 'costumeId')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->boolean('thumbnail')->default(false);
            $table->string('imagePath');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
