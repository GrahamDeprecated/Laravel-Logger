<?php

/*
 * This file is part of Laravel Logger.
 *
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\Logger\Facades;

use GrahamCampbell\Logger\Facades\Logger;
use GrahamCampbell\Logger\LoggerWrapper;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use GrahamCampbell\Tests\Logger\AbstractTestCase;

/**
 * This is the logger facade test class.
 *
 * @author Graham Campbell <graham@cachethq.io>
 */
class LoggerTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'logger';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Logger::class;
    }

    /**
     * Get the facade route.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return LoggerWrapper::class;
    }
}
