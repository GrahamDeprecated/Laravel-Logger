<?php

/*
 * This file is part of Laravel Logger.
 *
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\Logger;

use GrahamCampbell\Logger\LoggerWrapper;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Log\Writer;
use Psr\Log\LoggerInterface;

/**
 * This is the service provider test class.
 *
 * @author Graham Campbell <graham@cachethq.io>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testLoggerWrapperIsInjectable()
    {
        $this->assertIsInjectable(LoggerWrapper::class);
    }

    public function testBindings()
    {
        $this->assertInstanceOf(LoggerWrapper::class, $this->app->make('logger'));
        $this->assertInstanceOf(LoggerWrapper::class, $this->app->make(LoggerInterface::class));
        $this->assertInstanceOf(LoggerWrapper::class, $this->app->make(LoggerWrapper::class));
        $this->assertInstanceOf(LoggerWrapper::class, $this->app->make(Log::class));

        $this->assertInstanceOf(Writer::class, $this->app->make('log'));
        $this->assertInstanceOf(Writer::class, $this->app->make(Writer::class));
    }
}
