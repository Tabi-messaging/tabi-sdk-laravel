<?php

declare(strict_types=1);

namespace Tabi\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Tabi\SDK\TabiClient;

/**
 * @mixin \Tabi\SDK\TabiClient
 */
class Tabi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return TabiClient::class;
    }
}
