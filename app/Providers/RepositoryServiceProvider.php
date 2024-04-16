<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

      $this->app->bind(
        \App\Interfaces\SchoolYearInterface::class,
        \App\Repositories\SchoolYearRepository::class
      );

      $this->app->bind(
        \App\Interfaces\SettingInterface::class,
        \App\Repositories\SettingRepository::class
      );

      $this->app->bind(
        \App\Interfaces\SectionInterface::class,
        \App\Repositories\SectionRepository::class
      );

      $this->app->bind(
        \App\Interfaces\UserInterface::class,
        \App\Repositories\UserRepository::class,
      );

      $this->app->bind(
        \App\Interfaces\SemesterInterface::class,
        \App\Repositories\SemesterRepository::class,
      );

      $this->app->bind(
        \App\Interfaces\CourseInterface::class,
        \App\Repositories\CourseRepository::class,
      );

      $this->app->bind(
        \App\Interfaces\SchoolClassInterface::class,
        \App\Repositories\SchoolClassRepository::class
      );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
