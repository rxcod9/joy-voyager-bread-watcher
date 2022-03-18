<?php

return [

    /*
     * If enabled for voyager-bread-watcher package.
     */
    'enabled' => env('VOYAGER_BREAD_WATCHER_ENABLED', true),

    /*
     * The config_key for voyager-bread-watcher package.
     */
    'config_key' => env('VOYAGER_BREAD_WATCHER_CONFIG_KEY', 'joy-voyager-bread-watcher'),

    /*
     * The route_prefix for voyager-bread-watcher package.
     */
    'route_prefix' => env('VOYAGER_BREAD_WATCHER_ROUTE_PREFIX', 'joy-voyager-bread-watcher'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadWatcher\\Http\\Controllers',
    ],
];
