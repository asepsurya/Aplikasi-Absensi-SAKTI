<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Midtrans Configurations
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials and other configurations for
    | Midtrans, such as server key, client key, environment (sandbox/production),
    | and other Midtrans settings.
    |
    */

    'server_key'    => env('MIDTRANS_SERVER_KEY', ''),
    'client_key'    => env('MIDTRANS_CLIENT_KEY', ''),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized'  => env('MIDTRANS_IS_SANITIZED', true),
    'is_3ds'        => env('MIDTRANS_IS_3DS', true),
];
