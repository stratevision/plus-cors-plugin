<?php

return [
    'plugin' => [
        'name' => 'PLUS CORS',
        'description' => 'Cross-Origin Resource Sharing.',
    ],
    'permissions' => [
        'settings' => 'Manage CORS',
    ],
    'settings' => [
        'menu_label' => 'CORS',
        'menu_description' => 'Configure the CORS',
        'fields' => [
            'supportsCredentials' => [
                'label' => 'Support credentials',
                'comment' => "Enable it to support credentials between domains."
            ],
            'paths' => [
                'label' => 'Paths',
                'comment' => 'The url paths that will allow CORS.'
            ],
            'allowedOrigins' => [
                'label' => 'Allowed Origins',
                'comment' => 'The domains that do requests to your site (use * for all domains).'
            ],
            'allowedHeaders' => [
                'label' => 'Allowed Headers',
                'comment' => 'The headers that are supported.'
            ],
            'allowedMethods' => [
                'label' => 'Allowed Methods',
                'comment' => 'The HTTP methods that can be requested (use * for all methods).'
            ],
            'exposedHeaders' => [
                'label' => 'Exposed Headers',
                'comment' => 'The headers that can be exposed.'
            ],
            'maxAge' => [
                'label' => 'Max Age',
                'comment' => 'Set Access-Control-Max-Age to this value.'
            ]
        ]
    ]
];
