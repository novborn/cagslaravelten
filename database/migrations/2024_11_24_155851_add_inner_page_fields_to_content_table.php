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
            $table->text('inner_page_title')->nullable();
            $table->text('inner_page_sub_title')->nullable();
            $table->longText('inner_page_banner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('content', function (Blueprint $table) {
            $table->dropColumn(['inner_page_title', 'inner_page_sub_title', 'inner_page_banner']);
        });
    }
};
