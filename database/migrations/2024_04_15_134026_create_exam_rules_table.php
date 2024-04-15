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
        Schema::create('exam_rules', function (Blueprint $table) {
            $table->id();

            $table->float('total_marks');

            $table->float('pass_marks');

            $table->text('marks_distribution_note');

            $table->foreignId('exam_id')->unsignedInteger()->constrained('exams');

            $table->foreignId('school_year_id')->unsignedInteger()->constrained('school_years');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_rules');
    }
};
