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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('filename'); // Stored filename
            $table->string('original_name'); // Original uploaded filename
            $table->string('mime_type');
            $table->integer('size'); // File size in bytes
            $table->string('path'); // Storage path
            $table->enum('type', ['image', 'video'])->default('image');
            $table->text('alt_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};