<?php

namespace Ukmondo\Controller;

use Symfony\Component\HttpFoundation\{Request, Response};

class HomeController
{
    private $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function get(Request $request, Response $response)
    {
        $response->setContent('Hello World');
        return $response->send();
    }
}