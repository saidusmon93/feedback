<?php

namespace App\Providers;

use App\Repositories\DatabaseFeedbackRepository;
use App\Repositories\FeedbackRepositoryInterface;
use App\Repositories\FileFeedbackRepository;
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
