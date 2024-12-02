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
        Schema::create('lead_form', function (Blueprint $table) {
            $table->id();
            $table->string('student_name', 255)->nullable();
            $table->string('parent_name', 255)->nullable();
            $table->string('email_id', 255)->unique();
            $table->string('mobile_no', 15)->nullable();
            $table->date('student_dob')->nullable();
            $table->string('class_name', 100)->nullable();
            $table->text('class_session', 50)->nullable();
            $table->string('school_branch_name', 255)->nullable();
            $table->string('source', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_form');
    }
};
