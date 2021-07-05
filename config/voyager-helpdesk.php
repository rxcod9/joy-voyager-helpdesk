<?php

return [

    /*
     * The config_key for voyager-helpdesk package.
     */
    'config_key' => env('VOYAGER_HELPDESK_CONFIG_KEY', 'joy-voyager-helpdesk'),

    /*
     * The route_prefix for voyager-helpdesk package.
     */
    'route_prefix' => env('VOYAGER_HELPDESK_ROUTE_PREFIX', 'joy-voyager-helpdesk'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerHelpdesk\\Http\\Controllers',
    ],
];
