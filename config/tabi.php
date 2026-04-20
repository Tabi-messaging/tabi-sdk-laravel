<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API key
    |--------------------------------------------------------------------------
    |
    | Workspace or channel API key (tk_...) or JWT from the dashboard, depending
    | on the endpoints you call. Set TABI_API_KEY in .env.
    |
    */

    'api_key' => env('TABI_API_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | API base URL
    |--------------------------------------------------------------------------
    */

    'base_url' => env('TABI_BASE_URL', 'https://api.tabi.africa/api/v1'),

];
