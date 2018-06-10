<?php

return [
    'article' => [
        'pageSize' => 10,
        'sortColumn' => 'created_at',
        'sort' => 'desc',
    ],

    'admin' => [
        'username' => env('ADMIN_USERNAME'),
        'password' => env('ADMIN_PASSWORD'),
        'email' => env('ADMIN_EMAIL'),
    ],

    'google' => [
        'open' => env('GOOGLE_ANALYTICS_OPEN') ?: false,
        'id' => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
    ],

    'baidu' => [
        'open' => env('BAIDU_TONGJI_OPEN') ?: false,
        'id' => env('BAIDU_TONGJI_ID', 'Baidu-Tongji-ID'),
    ],

    'footer' => [
        'github' => [
            'open' => true,
            'url' => 'https://github.com/takashiki',
        ],
        'twitter' => [
            'open' => false,
        ],
        'meta' => '© Blote ' . date('Y') . '.',
        'beian' => env('BEIAN'),
    ],
];
