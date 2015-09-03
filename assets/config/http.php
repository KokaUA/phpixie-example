<?php

return array(
    'translator' => array(
        'basePath' => '/'
    ),
    'resolver' => array(
        'type' => 'group',
        'resolvers' => array(
            'admin' => array(
                'type'     => 'prefix',
                'path'  => 'admin/',
                'defaults' => array(
                    'bundle' => 'admin'
                ),
                'resolver' => array(
                    'type' => 'mount',
                    'name' => 'admin'
                )
            ),
            'app' => array(
                'type' => 'prefix',
                'defaults' => array(
                    'bundle' => 'app'
                ),
                'resolver' => array(
                    'type' => 'mount',
                    'name' => 'app'
                )
            )
        )
    ),
    'exceptionResponse' => array(
        'template' => 'framework:http/exception'
    ),
    'notFoundResponse' => array(
        'template' => 'framework:http/notFound'
    )
);