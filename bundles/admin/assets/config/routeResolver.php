<?php
return [
    'type'      => 'group',
    'resolvers' => [
        
        'default' => [
            'type'     => 'pattern',
            'path'     => '(<processor>(/<action>))',
            'defaults' => [
                'processor' => 'home',
                'action'    => 'index'
            ]
        ]
    ]
];
