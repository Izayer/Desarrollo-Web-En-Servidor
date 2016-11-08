<?php

/*
 * This file is part of Laravel Vimeo.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Vimeo Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'client_id' => 'c21e08de54c7cbc4584e27cdeff5151834668e3c',
            'client_secret' => 'lBd5D0xKb/9lCxszxrsduT8ZNmTonGz/0CH/tq57oVTK79/1jcLOoYwg0LYob4ogXRK0pRaexaOWD7E9DdI6RkZEEa8BOwOtUEHQCyvUKXUmswOvnZdrqOQ37gYk/3tg',
            'access_token' => 'a6a415cde24b35a479403f93a3b4a541',
        ],

        'alternative' => [
            'client_id' => 'your-client-id',
            'client_secret' => 'your-client-secret',
            'access_token' => null,
        ],

    ],

];
