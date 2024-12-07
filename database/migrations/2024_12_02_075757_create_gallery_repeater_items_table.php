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
        if (!Schema::hasTable('gallery_repeater_items')) {
            Schema::create('gallery_repeater_items', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('content_id');
                $table->string('thumbnail_image');
                $table->text('thumbnail_description');
                $table->timestamps();
    
                $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
            });
        }
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_repeater_items');
    }
};
