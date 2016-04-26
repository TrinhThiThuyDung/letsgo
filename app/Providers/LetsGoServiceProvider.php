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

        $this->app->bind(
            'App\Models\Repository\AlbumRepository',
            'App\Models\Repository\AlbumRepositoryEloquent');

        $this->app->bind(
            'App\Models\Service\AlbumServiceInterface',
            'App\Models\Service\AlbumService');
        $this->app->bind(
            'App\Models\Repository\ImageRepository',
            'App\Models\Repository\ImageRepositoryEloquent');

        $this->app->bind(
            'App\Models\Service\ImageServiceInterface',
            'App\Models\Service\ImageService');
        
    }
}
