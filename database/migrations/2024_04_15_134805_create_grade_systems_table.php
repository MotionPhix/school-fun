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
        Schema::create('grade_systems', function (Blueprint $table) {

            $table->id();

            $table->string('grade_system_name');

            $table->foreignId('school_year_id')->unsignedInteger()->constrained('school_years');

            $table->foreignId('school_class_id')->unsignedInteger()->constrained('school_classes');

            $table->foreignId('semester_id')->unsignedInteger()->constrained('semesters');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_systems');
    }
};
