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
    Schema::table('users', function (Blueprint $table) {
      $table->string('nationality')->nullable();
      $table->string('gender')->nullable();
      $table->date('birthday')->nullable();
      $table->string('blood_type')->nullable();
      $table->string('religion')->nullable();
      $table->string('role')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('nationality');
      $table->dropColumn('gender');
      $table->dropColumn('birthday');
      $table->dropColumn('religion');
      $table->dropColumn('blood_type');
      $table->dropColumn('role');
    });
  }
};
