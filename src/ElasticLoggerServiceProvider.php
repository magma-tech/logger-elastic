<?php

namespace MagmaTech\LoggerElastic;

use Illuminate\Support\ServiceProvider;
use MagmaTech\LoggerElastic\Providers\EventServiceProvider;

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
