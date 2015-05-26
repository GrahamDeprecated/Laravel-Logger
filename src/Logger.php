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

use Psr\Log\LoggerInterface;
use Illuminate\Contracts\Logging\Log;

/**
 * This is the logger class.
 *
 * @author Graham Campbell <graham@cachethq.io>
 */
class Logger implements LoggerInterface, Log
{
    /**
     * The registered loggers.
     *
     * @var \Psr\Log\LoggerInterface[]
     */
    protected $loggers;

    /**
     * Create a new logger instance.
     *
     * @param \Psr\Log\LoggerInterface[] $loggers
     *
     * @return void
     */
    public function __construct(array $loggers)
    {
        $this->loggers = $loggers;
    }

    /**
     * Log an emergency message to the logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function emergency($message, array $context = [])
    {
        foreach ($this->loggers as $logger) {
            $logger->emergency($message, $context);
        }
    }

    /**
     * Log an alert message to the logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function alert($message, array $context = [])
    {
        foreach ($this->loggers as $logger) {
            $logger->alert($message, $context);
        }
    }

    /**
     * Log a critical message to the logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function critical($message, array $context = [])
    {
        foreach ($this->loggers as $logger) {
            $logger->critical($message, $context);
        }
    }

    /**
     * Log an error message to the logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function error($message, array $context = [])
    {
        foreach ($this->loggers as $logger) {
            $logger->error($message, $context);
        }
    }

    /**
     * Log a warning message to the logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function warning($message, array $context = [])
    {
        foreach ($this->loggers as $logger) {
            $logger->warning($message, $context);
        }
    }

    /**
     * Log a notice to the logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function notice($message, array $context = [])
    {
        foreach ($this->loggers as $logger) {
            $logger->notice($message, $context);
        }
    }

    /**
     * Log an informational message to the logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function info($message, array $context = [])
    {
        foreach ($this->loggers as $logger) {
            $logger->info($message, $context);
        }
    }

    /**
     * Log a debug message to the logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function debug($message, array $context = [])
    {
        foreach ($this->loggers as $logger) {
            $logger->debug($message, $context);
        }
    }

    /**
     * Log a message to the logs.
     *
     * @param string $level
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function log($level, $message, array $context = [])
    {
        foreach ($this->loggers as $logger) {
            $logger->log($level, $message, $context);
        }
    }

    /**
     * Register a file log handler.
     *
     * @param string $path
     * @param string $level
     *
     * @return void
     */
    public function useFiles($path, $level = 'debug')
    {
        foreach ($this->loggers as $logger) {
            if ($logger instanceof Log) {
                $logger->useFiles($path, $level);
            }
        }
    }

    /**
     * Register a daily file log handler.
     *
     * @param string $path
     * @param int    $days
     * @param string $level
     *
     * @return void
     */
    public function useDailyFiles($path, $days = 0, $level = 'debug')
    {
        foreach ($this->loggers as $logger) {
            if ($logger instanceof Log) {
                $logger->useDailyFiles($path, $days, $level);
            }
        }
    }
}
