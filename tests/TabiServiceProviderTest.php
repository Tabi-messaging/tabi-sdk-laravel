<?php

declare(strict_types=1);

namespace Tabi\Laravel\Tests;

use Tabi\Laravel\Facades\Tabi;
use Tabi\SDK\TabiClient;

class TabiServiceProviderTest extends TestCase
{
    public function test_resolves_tabiclient_from_container(): void
    {
        $client = $this->app->make(TabiClient::class);
        $this->assertInstanceOf(TabiClient::class, $client);
    }

    public function test_facade_resolves_to_tabiclient(): void
    {
        $this->assertInstanceOf(TabiClient::class, Tabi::getFacadeRoot());
    }

    public function test_facade_delegates_to_client(): void
    {
        $this->assertInstanceOf(\Tabi\SDK\Resources\Auth::class, Tabi::auth());
    }
}
