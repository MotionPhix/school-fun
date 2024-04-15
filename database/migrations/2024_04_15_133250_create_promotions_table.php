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
        Schema::create('promotions', function (Blueprint $table) {

            $table->id();

            $table->foreignId('student_id')->unsignedInteger()->constrained('users');

            $table->foreignId('school_class_id')->unsignedInteger()->constrained('school_classes');

            $table->foreignId('section_id')->unsignedInteger()->constrained('sections');

            $table->foreignId('school_year_id')->unsignedInteger()->constrained('school_years');

            $table->string('id_card_number');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
