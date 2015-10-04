<?php

return [
    'translator' => [
        'basePath' => '/'
    ],
    'resolver' => [
        'type' => 'group',
        'resolvers' => [
            'admin' => [
                'type'     => 'prefix',
                'path'  => 'admin/',
                'defaults' => [
                    'bundle' => 'admin'
                ],
                'resolver' => [
                    'type' => 'mount',
                    'name' => 'admin'
                ]
            ],
            'app' => [
                'type' => 'prefix',
                'defaults' => [
                    'bundle' => 'app'
                ],
                'resolver' => [
                    'type' => 'mount',
                    'name' => 'app'
                ]
            ]
        ]
    ],
    'exceptionResponse' => [
        'template' => 'framework:http/exception'
    ],
    'notFoundResponse' => [
        'template' => 'framework:http/notFound'
    ]
];
