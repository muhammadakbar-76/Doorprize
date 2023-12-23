<?php

namespace App\Providers;

use App\Interfaces\QueueOfDeptsInterface;
use App\Services\QueueOfDeptsService;
use Illuminate\Support\ServiceProvider;

class QueueOfDeptsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(QueueOfDeptsInterface::class, QueueOfDeptsService::class);
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
