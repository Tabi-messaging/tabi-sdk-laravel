<?php

declare(strict_types=1);

namespace Tabi\Laravel\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Tabi\Laravel\Facades\Tabi;
use Tabi\Laravel\TabiServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [TabiServiceProvider::class];
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<string, class-string>
     */
    protected function getPackageAliases($app): array
    {
        return [
            'Tabi' => Tabi::class,
        ];
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function defineEnvironment($app): void
    {
        $app['config']->set('tabi.api_key', 'tk_test');
        $app['config']->set('tabi.base_url', 'https://api.tabi.africa/api/v1');
    }
}
