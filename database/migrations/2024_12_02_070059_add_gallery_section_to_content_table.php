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
        Schema::table('content', function (Blueprint $table) {
            $table->longText('gallery_section_title')->nullable();
            $table->longText('gallery_section_sub_title')->nullable();
            //$table->json('items')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('content', function (Blueprint $table) {
            $table->dropColumn(['gallery_section_title', 'gallery_section_sub_title']);
        });
    }
};
