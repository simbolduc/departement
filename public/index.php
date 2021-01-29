<?php
session_start(); // Start sessions to be able to store user sessions ($_SESSION)

require_once '../vendor/autoload.php';
require_once '../database/Database.php';
require_once '../app/Session.php';

$router = new AltoRouter();

$database_config = require '../config/database.php';
$database_config = $database_config['mysql']; // Set to wanted database config name

$database = new Database($database_config['database']);
$database->setHost($database_config['host'])
        ->setPort($database_config['port'])
        ->setUsername($database_config['username'])
        ->setPassword($database_config['password']);
$db_conn = $database->connect();

require '../config/routes.php';

$match = $router->match();

if(is_array($match)) {
    // Check for middlewares
    $middlewares = require '../config/middlewares.php';
    if(isset($middlewares[$match['name']])) {
        $middleware = $middlewares[$match['name']];
        if(is_array($middleware)) {
            foreach($middleware as $m) {
                callMiddleware($m, $match['params'], $router, $db_conn);
            }
        } else callMiddleware($middleware, $match['params'], $router, $db_conn);
    }

    // Load controller
    $exploded = explode('@', $match['target']);

    if(is_array($exploded) && count($exploded) >= 2) {
        $path = '../app/controllers/' . $exploded[0] . '.php';
        if (file_exists($path)) {
            require_once '../app/controllers/Controller.php';
            require_once '../app/controllers/' . $exploded[0] . '.php';
            if (class_exists('\\app\\controllers\\' . $exploded[0])) {
                $instance = getControllerClassInstance($exploded[0], $router, $db_conn);
                $response = call_user_func_array(array($instance, $exploded[1]), $match['params']) or die("Couldn't call specified method");
                if(!$response)
                    die("Couldn't return demanded view");
            } else {
                die("Specified controller class not found");
            }
        } else {
            die("Specified controller class not found");
        }
    } else {
        $instance = getControllerClassInstance('Controller', $router, $db_conn);
        $response = call_user_func_array(array($instance, 'view'), array($match['target'], $match['params'])) or die("Couldn't call specified method");
        if(!$response)
            echo "Couldn't return demanded view";
    }
} else {
    echo '404 page not found';
}

function getControllerClassInstance($controller, $router, $db) {
    try {
        $class = new ReflectionClass('\\app\\controllers\\' . $controller);
        return $class->newInstanceArgs(array($router, $db));
    } catch (ReflectionException $e) {
        die($e->getMessage());
    }
}

function callMiddleware($middleware, $route_params, $router, $db) {
    try {
        require_once '../app/middlewares/Middleware.php';
        require_once '../app/middlewares/IMiddleware.php';
        require_once '../'.str_replace('\\', '/', $middleware).'.php';
        $class = new ReflectionClass($middleware);
        $instance = $class->newInstanceArgs(array($router, $db));
        call_user_func_array(array($instance, 'handle'), array($_REQUEST, $route_params)) or die("Couldn't call handle method");
    } catch (ReflectionException $e) {
        die("Couldn't load specified middleware");
    }
}