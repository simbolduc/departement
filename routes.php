<?php
$router->map('GET', '/', 'HomeController@index', 'page.home');
$router->map('GET', '/news/[i:id]', 'NewsController@index', 'page.news');

// Authentication
$router->map('GET', '/auth/login', 'auth\AuthController@login_index', 'page.auth.login');