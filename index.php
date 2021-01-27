<?php
require 'vendor/autoload.php';
require 'database/Database.php';

$uri = $_SERVER['REQUEST_URI'];

$router = new AltoRouter();

$database_config = require 'config/database.php';
$database_config = $database_config['mysql']; // Set to wanted database config name

$database = new Database($database_config['database']);
$database->setHost($database_config['host']);
$database->setPort($database_config['port']);
$database->setUsername($database_config['username']);
$database->setPassword($database_config['password']);
$db_conn = $database->connect();

require 'routes.php';

$match = $router->match();
if(is_array($match)) {
    $exploded = explode('@', $match['target']);

    if(is_array($exploded) && count($exploded) >= 2) {
        $path = './controllers/' . $exploded[0] . '.php';
        if (file_exists($path)) {
            require_once 'controllers/controller.php';
            require_once 'controllers/' . $exploded[0] . '.php';
            if (class_exists('\\controllers\\' . $exploded[0])) {
                try {
//                    $class = new ReflectionClass('\\controllers\\' . $exploded[0]);
//                    $instance = $class->newInstanceArgs(array($router));
                    $instance = getControllerClassInstance($exploded[0], $router, $db_conn);
                    $response = call_user_func_array(array($instance, $exploded[1]), $match['params']);
                    if(!$response)
                        echo "Couldn't return demanded view";
                } catch (ReflectionException $e) {
                    echo $e->getMessage();
                }
            } else {
                echo "Specified controller class not found";
            }
        } else {
            echo "Specified controller class not found";
        }
    }
    else {
        $instance = getControllerClassInstance('Controller', $router, $db_conn);
        $response = call_user_func_array(array($instance, 'view'), array($match['target'], $match['params']));
        if(!$response)
            echo "Couldn't return demanded view";
//        $params = $match['params'];
//        ob_start();
//        require "views/pages/{$match['target']}.php";
//        $page_content = ob_get_clean();
//        require 'views/layouts/default.php';
    }
} else {
    echo '404 page not found';
}

function getControllerClassInstance($controller, $router, $db) {
    try {
        $class = new ReflectionClass('\\controllers\\' . $controller);
        return $class->newInstanceArgs(array($router, $db));
    } catch (ReflectionException $e) {
        die($e->getMessage());
    }
}