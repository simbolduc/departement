<?php
namespace app\middlewares;

class AddErrorMiddleware extends Middleware implements IMiddleware{

    public function handle($request, $route_params = []) {
        return $this->redirectToRoute('page.auth.login', [
            'error' => [
                'Success1',
                'Success2',
                'Success3'
            ]
        ]);
    }

}