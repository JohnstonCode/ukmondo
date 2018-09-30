<?php

namespace Ukmondo\Controller;

use Symfony\Component\HttpFoundation\Response;

class NotFoundController
{
    public function run()
    {
        $response = new Response(
            '',
            Response::HTTP_NOT_FOUND,
            ['content-type' => 'text/html']
        );
        
        return $response->send();
    }
}
