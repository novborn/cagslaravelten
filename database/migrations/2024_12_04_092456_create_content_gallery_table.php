<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content_id')->nullable();
            $table->string('content_gallery_image')->nullable();
            $table->string('content_gallery_desc')->nullable();
            $table->timestamps();

            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_gallery');
    }
}
