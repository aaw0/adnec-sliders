<?php

namespace Aaw0\AdnecSliders;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class AdnecSlidersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::resources([
            AdnecSlider::class
        ]);
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    public function register()
    {

    }
}
