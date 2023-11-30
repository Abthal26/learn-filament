<?php

return [
    'env_stub' => '.env',
    'storage_dirs' => [
        'app' => [
            'public' => [

            ],
        ],
        'framework' => [
            'cache' => [
            ],
            'testing' => [
            ],
            'sessions' => [
            ],
            'views' => [
            ],
        ],
        'logs' => [
        ],
    ],
    'domain' => [ 'site1' => [
        'base_path' => base_path('domain/site1'),
        'base_url' => env('APP_URL').'/site1',
    ],
    'domain2' => [
        'base_path' => base_path('domains/site2'),
        'base_url' => env('APP_URL').'/site2',
    ],
    ],
];