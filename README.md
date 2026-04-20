# tabi/laravel-sdk

Laravel integration for the [**Tabi**](https://tabi.africa) WhatsApp Business Messaging API. This package registers [`tabi/sdk`](https://packagist.org/packages/tabi/sdk) (`Tabi\SDK\TabiClient`) in the service container with config from your environment.

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

## Requirements

- PHP >= 8.1
- Laravel 10, 11, or 12
- A Tabi API key (or JWT for endpoints that require it)

## Installation

```bash
composer require tabi/laravel-sdk
```

The service provider and `Tabi` facade are **auto-discovered** (no need to add them to `config/app.php`).

## Configuration

Publish the config file (optional):

```bash
php artisan vendor:publish --tag=tabi-config
```

Set in `.env`:

| Variable | Description |
|----------|-------------|
| `TABI_API_KEY` | Workspace or channel API key (`tk_...`) or JWT when required |
| `TABI_BASE_URL` | Optional. Default: `https://api.tabi.africa/api/v1` |

## Usage

### Dependency injection

```php
use Tabi\SDK\TabiClient;

public function __construct(private TabiClient $tabi) {}

$this->tabi->channels()->send('channel-uuid', [
    'to' => '2348012345678',
    'content' => 'Hello from Laravel!',
]);
```

### Facade

```php
use Tabi\Laravel\Facades\Tabi;

Tabi::channels()->sendOtp('channel-uuid', ['phone' => '+2348012345678']);
Tabi::channels()->verifyOtp('channel-uuid', [
    'phone' => '+2348012345678',
    'code' => '123456',
]);
```

### Container

```php
$tabi = app(\Tabi\SDK\TabiClient::class);
// or
$tabi = app('tabi.client');
```

## API reference

All methods and request-body shapes are documented on **`Tabi\SDK\TabiClient`** and resource classes in **`tabi/sdk`**. See the [product SDK page](https://tabi.africa/sdks) and [HTTP API docs](https://tabi.africa/api-docs).

## License

MIT. See [LICENSE](LICENSE).
