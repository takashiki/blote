<?php

return [
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

    'admin' => [
        'username' => env('ADMIN_USERNAME'),
        'password' => env('ADMIN_PASSWORD'),
        'email' => env('ADMIN_EMAIL'),
    ],

    'meta' => [
        'keywords' => 'PJ Blog,blog,pigjian,laravel,vuejs',
        'description' => 'Nothing is impossible in PJ Blog'
    ],

    'article' => [
        'pageSize' => 10,
        'sortColumn' => 'updated_at',
        'sort' => 'desc',
    ],

    'google' => [
        'open' => env('GOOGLE_ANALYTICS_OPEN') ?: false,
        'id' => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
    ],

    'footer' => [
        'github' => [
            'open' => true,
            'url'  => 'https://github.com/takashiki',
        ],
        'twitter' => [
            'open' => false,
        ],
        'meta' => '© Blote ' . date('Y') . '.',
    ],
];
