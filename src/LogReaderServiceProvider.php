<?php

namespace Kriss\LaravelLogReader;

use Illuminate\Support\ServiceProvider;
use Kriss\LogReader\LogReader;

class LogReaderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/log-reader.php' => config_path('log-reader.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/log-reader.php',
            'log-reader'
        );

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->app->singleton('log-reader', function ($app) {
            $config = config('log-reader');
            $logPath = $config['logPath'];
            unset($config['logPath']);

            return new LogReader($logPath, $config);
        });

        $this->app->alias('log-reader', LogReader::class);
    }

    public function provides()
    {
        return [
            'log-reader',
            LogReader::class,
        ];
    }
}
