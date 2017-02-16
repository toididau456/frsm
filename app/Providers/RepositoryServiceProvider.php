<?php

namespace App\Providers;

use App\Repositories\Contracts\PositionRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquent\PositionRepository;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(UserRepositoryInterface::class, UserRepository::class);
        App::bind(PositionRepositoryInterface::class, PositionRepository::class);
    }
}
