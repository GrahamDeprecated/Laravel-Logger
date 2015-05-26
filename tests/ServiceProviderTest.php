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

use GrahamCampbell\TestBench\Traits\ServiceProviderTestCaseTrait;

/**
 * This is the service provider test class.
 *
 * @author Graham Campbell <graham@cachethq.io>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTestCaseTrait;

    public function testLoggerIsInjectable()
    {
        $this->assertIsInjectable('GrahamCampbell\Logger\Logger');
    }

    public function testBindings()
    {
        $this->assertInstanceOf('GrahamCampbell\Logger\Logger', $this->app->make('logger'));
        $this->assertInstanceOf('GrahamCampbell\Logger\Logger', $this->app->make('Psr\Log\LoggerInterface'));
        $this->assertInstanceOf('GrahamCampbell\Logger\Logger', $this->app->make('GrahamCampbell\Logger\Logger'));
        $this->assertInstanceOf('GrahamCampbell\Logger\Logger', $this->app->make('Illuminate\Contracts\Logging\Log'));

        $this->assertInstanceOf('Illuminate\Log\Writer', $this->app->make('log'));
        $this->assertInstanceOf('Illuminate\Log\Writer', $this->app->make('Illuminate\Log\Writer'));
    }
}
