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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();

            $table->string('exam_name');

            $table->dateTime('start_date');

            $table->dateTime('end_date');

            $table->foreignId('school_class_id')->unsignedInteger()->constrained('school_classes');

            $table->foreignId('course_id')->unsignedInteger()->constrained('courses');

            $table->foreignId('semester_id')->unsignedInteger()->constrained('semesters');

            $table->foreignId('school_year_id')->unsignedInteger()->constrained('school_years');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
