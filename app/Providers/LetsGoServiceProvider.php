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
        $this->app->bind(
            'App\Models\Repository\LikeRepository',
            'App\Models\Repository\LikeRepositoryEloquent');

        $this->app->bind(
            'App\Models\Service\LikeServiceInterface',
            'App\Models\Service\LikeService');
        $this->app->bind(
            'App\Models\Repository\CommentRepository',
            'App\Models\Repository\CommentRepositoryEloquent');

        $this->app->bind(
            'App\Models\Service\CommentServiceInterface',
            'App\Models\Service\CommentService');
        $this->app->bind(
            'App\Models\Repository\NoticationRepository',
            'App\Models\Repository\NoticationRepositoryEloquent');

        $this->app->bind(
            'App\Models\Service\NoticationServiceInterface',
            'App\Models\Service\NoticationService');
        $this->app->bind(
            'App\Models\Repository\FollowRepository',
            'App\Models\Repository\FollowRepositoryEloquent');

        $this->app->bind(
            'App\Models\Service\FollowServiceInterface',
            'App\Models\Service\FollowService');
        $this->app->bind(
            'App\Models\Repository\KindRepository',
            'App\Models\Repository\KindRepositoryEloquent');

        $this->app->bind(
            'App\Models\Service\KindServiceInterface',
            'App\Models\Service\KindService');
        
    }
}
