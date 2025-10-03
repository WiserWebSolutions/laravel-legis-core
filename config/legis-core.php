<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Request Configuration
    |--------------------------------------------------------------------------
    | Here you may configure the settings for HTTP requests made to the
    | LegiScan API.
    | You can adjust the timeout, number of retries, and retry sleep options.
    |
    */
    'request' => [
        'timeout' => 30,
        'retry_times' => 2,
        'retry_sleep_ms' => 200,
    ],

    /*
    |--------------------------------------------------------------------------
    | Caching Configuration
    |--------------------------------------------------------------------------
    | Here you may configure the settings for caching API responses.
    | You can enable or disable caching, choose the cache store,
    | and set the time-to-live (TTL) for cached items.
    |
    */
    'cache' => [
        'enabled' => env('LEGIS_CACHE_ENABLED', true),
        'store' => env('LEGIS_CACHE_STORE', 'file'),
        'ttl' => env('LEGIS_CACHE_TTL', 3600),
    ],

    /*
    |--------------------------------------------------------------------------
    | Storage Configuration
    |--------------------------------------------------------------------------
    | Here you may configure the settings for handling storage.
    | You can specify the storage disk and path for files.
    |
    */
    'storage' => [
        'disk' => env('LEGIS_STORAGE_DISK', 'local'),
        'path' => env('LEGIS_STORAGE_PATH', 'legis'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Event Broadcasting Configuration
    |--------------------------------------------------------------------------
    | Here you may configure whether to broadcast events
    | when models are retrieved from the API.
    | This can be useful for logging or triggering additional actions in your app.
    |
    */
    'events' => [
        'enabled' => env('LEGIS_EVENTS_ENABLED', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Configuration
    |--------------------------------------------------------------------------
    | Here you may configure the settings for the database connection
    | used by legis packages.
    |
    */
    'database' => [
        'prefix' => env('LEGIS_DATABASE_PREFIX', 'legis_'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Allow Excessive Queries
    |--------------------------------------------------------------------------
    |
    | Enabling this config allows the package to perform potentially expensive
    | API calls.
    |
    | These requests can quickly add up if you are looking to query many
    | different models at once and you are using a paid/throttled driver.
    */
    'allow_aggressive_queries' => env('LEGIS_ALLOW_AGGRESSIVE_QUERIES', false),
];
