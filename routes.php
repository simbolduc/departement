<?php
$router->map('GET', '/', 'HomeController@index', 'page.home');
$router->map('GET', '/articles/[i:id]', 'NewsController@index', 'page.news');

// Authentication
$router->map('GET', '/auth/login', 'auth\AuthController@login_index', 'page.auth.login');
$router->map('POST', '/auth/login', 'auth\AuthController@login', 'api.auth.login');
