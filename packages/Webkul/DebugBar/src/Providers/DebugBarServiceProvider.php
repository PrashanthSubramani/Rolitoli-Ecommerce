<?php

namespace Webkul\DebugBar\Providers;

use Illuminate\Support\ServiceProvider;
use Barryvdh\Debugbar\Facades\Debugbar;
use Webkul\DebugBar\DataCollector\ModuleCollector;

class DebugBarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (class_exists(Debugbar::class)) {
            Debugbar::addCollector(app(ModuleCollector::class));
        }
    }
}
