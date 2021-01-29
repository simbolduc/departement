<?php
namespace app\middlewares;

interface IMiddleware {

    public function handle($request, $route_params = []);

}