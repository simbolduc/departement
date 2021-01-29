<?php
namespace app\middlewares;

use app\Session;

class AuthMiddleware extends Middleware implements IMiddleware{

    public function handle($request, $route_params = []) {
        return $this->redirectToRoute('page.auth.login', [
            'error' => [
                'Vous devez être connecté pour accéder à cette page'
            ]
        ]);
    }

}