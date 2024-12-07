<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGallerySlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gallery_slider_type')->nullable();
            $table->longText('gallery_slider_image_one')->nullable();
            $table->longText('gallery_slider_image_two')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_sliders');
    }
}
