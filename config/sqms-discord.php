<?php

return [
    'key' => env('SQMS_DISCORD_BOT_TOKEN'),
    'permissions' => [
        'module' => 'sqms-discord',
        'definitions' => [
            'admin discord' => 'Grant access to the Discord management',
        ],
    ],
];
