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
        Schema::create('gallery_repeater_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_id'); // Foreign key for Content model
            $table->string('thumbnail_image'); // Image URL or path
            $table->text('thumbnail_description'); // Description text
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_repeater_items');
    }
};
