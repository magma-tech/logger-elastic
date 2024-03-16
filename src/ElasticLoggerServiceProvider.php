<?php

namespace MagmaTech\ElasticLogger;

use Illuminate\Support\ServiceProvider;
use MagmaTech\ElasticLogger\Providers\EventServiceProvider;

class ElasticLoggerServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'elastic_logging');
        if(config('elastic_logging.elastic_enabled')){
            $this->app->register(EventServiceProvider::class);
        }
    }

    public function register(){}
}
