<?php
$router->map('GET', '/', 'HomeController@index', 'page.home');
$router->map('GET', '/news/[i:id]', 'NewsController@index', 'page.news');