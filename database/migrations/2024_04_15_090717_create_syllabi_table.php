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
        Schema::create('syllabi', function (Blueprint $table) {
            $table->id();

            $table->string('syllabus_name');

            $table->string('syllabus_file_path')->nullable();

            $table->foreignId('course_id')->unsignedInteger()->constrained('courses');

            $table->foreignId('school_year_id')->unsignedInteger()->constrained('school_years');

            $table->foreignId('school_class_id')->unsignedInteger()->constrained('school_classes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syllabi');
    }
};
