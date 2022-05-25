<?php

return [

    'default' => 'redmine',

    'hosts' => [
        'redmine' => [
            'host'     => env('REDMINE_HOST'),
            'token'    => env('REDMINE_TOKEN'),
            'password' => env('REDMINE_PASSWORD'),
        ],
    ],
];
