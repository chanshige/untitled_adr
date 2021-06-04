<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JMS\Serializer\ArrayTransformerInterface;
use JMS\Serializer\SerializerBuilder;

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
        $this->app->singleton(ArrayTransformerInterface::class, fn() => SerializerBuilder::create()->build());
    }
}
