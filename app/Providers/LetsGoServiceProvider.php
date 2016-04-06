<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LetsGoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Models\Repository\UserRepository',
            'App\Models\Repository\UserRepositoryEloquent');

        $this->app->bind(
            'App\Models\Service\UserServiceInterface',
            'App\Models\Service\UserService');
    }
}
