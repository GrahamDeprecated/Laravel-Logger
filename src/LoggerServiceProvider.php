<?php

/*
 * This file is part of Laravel Logger.
 *
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Logger;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

/**
 * This is the logger service provider class.
 *
 * @author Graham Campbell <graham@cachethq.io>
 */
class LoggerServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/logger.php');

        $this->publishes([$source => config_path('logger.php')]);

        $this->mergeConfigFrom($source, 'logger');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLogger($this->app);
    }

    /**
     * Register the logger class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function registerLogger(Application $app)
    {
        $app->singleton('logger', function ($app) {
            $loggers = [];

            foreach ($app->config->get('logger.loggers', []) as $logger) {
                $loggers[] = $app->make($logger);
            }

            return new Logger($loggers);
        });

        $app->alias('logger', Logger::class);
        $app->alias('logger', 'Psr\Log\LoggerInterface');
        $app->alias('logger', 'Illuminate\Contracts\Logging\Log');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'logger'
        ];
    }
}
