<?php

return [
    'domains' => [
        'default' => [
            'repository' => 'app.user',
            'providers' => [
                'session' => [
                    'type' => 'http.session'
                ],
                'cookie' => [
                    'type' => 'http.cookie',
                    'persistProviders' => ['session'],
                    'tokens' => [
                        'storage' => [
                            'type' => 'database',
                            'table' => 'tokens',
                            'defaultLifetime' => 3600 * 24 * 14 // two weeks
                        ]
                    ]
                ],

                'password' => [
                    'type' => 'login.password',
                    'persistProviders' => ['session']
                ]
            ]
        ],
        'admin' => [
            'repository' => 'admin.user',
            'providers' => [
                'session' => [
                    'type' => 'http.session'
                ],
                'password' => [
                    'type' => 'login.password',
                    'persistProviders' => ['session']
                ]
            ]
        ]

    ]
];
