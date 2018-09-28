<?php

namespace Ukmondo\Controller;

class NotFoundController
{
    public function run()
    {
        header('HTTP/1.0 404 Not Found', true, 404);
        echo 'NOT FOUND';
    }
}
