<?php
$router->map('GET', '/', 'HomeController@index', 'page.home');
$router->map('GET', '/news/[a:slug]', 'NewsController@index', 'page.news');