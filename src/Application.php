<?php

namespace Ukmondo;

use Symfony\Component\HttpFoundation\{Request, Response};

class Application
{
    public $container;
    private $routes;

    public function __construct($container, $routes)
    {
        $this->container = $container;
        $this->routes = $routes;
    }

    public function run()
    {
        $uri = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['path'] === $uri && in_array($method, $route['method'])) {
                list($controller, $func) = preg_split('/:/', $route['controller']);

                $request = Request::createFromGlobals();
                $response = new Response(
                    '',
                    Response::HTTP_OK,
                    ['content-type' => 'text/html']
                );

                return call_user_func_array([$this->container[$controller], $func], [$request, $response]);
            }
        }

        return $this->container['NotFoundController']->run();
    }
}
