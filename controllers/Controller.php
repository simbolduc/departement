<?php
namespace controllers;

class Controller {

    private $router;

    public function __construct($router){
        $this->router = $router;
    }

    protected function getRoutes() {
        return $this->router->getRoutes();
    }

    protected function view(String $view, Array $data = []) {
        // Declare each key/value pair as a variable
        extract($data);

        // Construct the view with the variables
        try {
            ob_start();
            require __DIR__.'/../views/pages/'.str_replace('.', '/', $view).'.php';
            $page_content = ob_get_clean();
            require __DIR__.'/../views/layouts/default.php';
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    protected function redirectToUrl($url) {

    }

    protected function redirectToRoute($route) {

    }

}