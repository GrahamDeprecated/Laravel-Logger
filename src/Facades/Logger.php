<?php

/*
 * This file is part of Laravel Logger.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Logger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the logger facade class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Logger extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'logger';
    }
}
