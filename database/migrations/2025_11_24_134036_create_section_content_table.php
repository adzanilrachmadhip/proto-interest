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
        Schema::create('section_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->string('key'); // 'title', 'description', 'button_text', etc
            $table->string('type')->default('text'); // text, textarea, image, video, url
            $table->text('value')->nullable(); // Content value (can be JSON)
            $table->timestamps();
            
            // Composite unique key
            $table->unique(['section_id', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_contents');
    }
};