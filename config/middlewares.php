<?php

use app\middlewares\AddErrorMiddleware;
use app\middlewares\AuthMiddleware;

return [
    'page.news' => [
        AuthMiddleware::class,
        AddErrorMiddleware::class
    ],
    'page.home' => [
        AuthMiddleware::class
    ]
];