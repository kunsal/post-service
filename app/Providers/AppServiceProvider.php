<?php

namespace App\Providers;

use App\Contracts\PostRepositoryInterface;
use App\Contracts\UserRepositoryInterface;
use App\Contracts\WebsiteRepositoryInterface;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use App\Repositories\WebsiteRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(WebsiteRepositoryInterface::class, WebsiteRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
