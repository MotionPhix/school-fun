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
        Schema::create('grade_rules', function (Blueprint $table) {
            $table->id();

            $table->float('point');

            $table->string('grade');

            $table->float('start_at');

            $table->float('end_at');

            $table->foreignId('grade_system_id')->unsignedInteger()->constrained('grade_systems');

            $table->foreignId('school_year_id')->unsignedInteger()->constrained('school_years');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_rules');
    }
};