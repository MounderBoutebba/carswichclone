<?php
return [
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],
    'guards' => [
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\Model\User::class
        ],
        'admin' => [
            'driver' => 'eloquent',
            'model' => \App\Model\BackofficeUser::class
        ],

    ]
];
