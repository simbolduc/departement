<?php

use app\middlewares\AuthMiddleware;

return [
    'page.news' => [
        AuthMiddleware::class,
    ],
];