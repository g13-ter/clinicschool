<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Connect interfaces to their classes
        $this->app->bind(
            \App\Repositories\StudentRepositoryInterface::class,
            \App\Repositories\Eloquent\StudentRepository::class
        );

        $this->app->bind(
            \App\Repositories\MedicineRepositoryInterface::class,
            \App\Repositories\Eloquent\MedicineRepository::class
        );

        $this->app->bind(
            \App\Repositories\ClinicVisitRepositoryInterface::class,
            \App\Repositories\Eloquent\ClinicVisitRepository::class
        );

        $this->app->bind(
            \App\Repositories\MedicineOrderedRepositoryInterface::class,
            \App\Repositories\Eloquent\MedicineOrderedRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
