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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();

            $table->time('start');

            $table->time('end');

            $table->integer('weekday');

            $table->foreignId('school_class_id')->unsignedInteger()->constrained('school_classes');

            $table->foreignId('section_id')->unsignedInteger()->constrained('sections');

            $table->foreignId('course_id')->unsignedInteger()->constrained('courses');

            $table->foreignId('school_year_id')->unsignedInteger()->constrained('school_years');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
