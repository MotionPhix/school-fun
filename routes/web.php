<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::middleware(['splade'])->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::middleware('auth')->group(function () {

      Route::get(
        '/',
        \App\Http\Controllers\Home::class
      )->name('dashboard');

      Route::prefix('settings')->group(function () {

        Route::post(
          'c/school-year',
          [\App\Http\Controllers\Settings\Setting::class, 'store']
        )->name('settings.schoolyear.store');

        Route::post(
          'b/school-year',
          [\App\Http\Controllers\Settings\Setting::class, 'browse']
        )->name('settings.schoolyear.browse');

        Route::get(
          '/g/school-year',
          [\App\Http\Controllers\Settings\Setting::class, 'index']
        )->name('settings.schoolyear');

      });

    });
});
