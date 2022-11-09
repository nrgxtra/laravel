<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Pagination\Paginator;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Post::unguard();
        PostComment::unguard();
        Paginator::useBootstrap();
    }
}
