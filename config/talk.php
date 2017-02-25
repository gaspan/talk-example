<?php
return [
    'user' => [
        'model' => 'App\User'
    ],
    'broadcast' => [
        'enable' => true,
        'app_name' => 'talk-example',
        'pusher' => [
            'app_id'        => env('PUSHER_APP_ID','1a'),
            'app_key'       => env('PUSHER_KEY','1a'),
            'app_secret'    => env('PUSHER_SECRET','1a')
        ]
    ]
];
