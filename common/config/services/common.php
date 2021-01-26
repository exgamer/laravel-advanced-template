<?php

use Common\App\Services\ExampleService;
use Common\App\Services\TestService;

return [
    'testService' => [
        'class' => TestService::class,
    ],
    'exampleService' => [
        'class' => ExampleService::class,
        'params' => [
            'testService'
        ],
    ]
];