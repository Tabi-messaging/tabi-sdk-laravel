<?php

declare(strict_types=1);

namespace Tabi\Laravel;

use Illuminate\Support\ServiceProvider;
use Tabi\SDK\TabiClient;

class TabiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/tabi.php', 'tabi');

        $this->app->singleton(TabiClient::class, function ($app): TabiClient {
            $config = $app['config']->get('tabi', []);

            $apiKey = (string) ($config['api_key'] ?? '');
            $baseUrl = (string) ($config['base_url'] ?? 'https://api.tabi.africa/api/v1');

            return new TabiClient($apiKey, $baseUrl);
        });

        $this->app->alias(TabiClient::class, 'tabi.client');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/tabi.php' => $this->app->configPath('tabi.php'),
            ], 'tabi-config');
        }
    }
}
