<?php

namespace Deniscosmin21\LogService\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deniscosmin21\LogService\LogService
 */
class LogService extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'custom_log_data';
    }
}
