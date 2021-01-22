<?php
require 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$router = new AltoRouter();

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
                    $class = new ReflectionClass('\\controllers\\' . $exploded[0]);
                    $instance = $class->newInstanceArgs(array($router));
                    call_user_func_array(array($instance, $exploded[1]), $match['params']);
                } catch (ReflectionException $e) {
                    echo $e->getMessage();
                }
            } else {
                echo "Specified controller class not found";
            }
        } else {
            echo "Specified controller class not found";
        }
    } else {
        $params = $match['params'];
        ob_start();
        require "views/pages/{$match['target']}.php";
        $page_content = ob_get_clean();
        require 'views/layouts/default.php';
    }
} else {
    echo '404 page not found';
}