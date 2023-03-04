<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ArticleVisitLoggerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('articlevisitlogger', function(){
            return new \App\ArticleVisitLogger\ArticleVisitLogger();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
