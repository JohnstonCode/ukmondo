<?php

require __DIR__ . '/../vendor/autoload.php';

$container = new Pimple\Container();
$routes = require_once __DIR__ . '/../config/routes.php';   

$app = new Ukmondo\Application($container, $routes);

$app->container['HomeController'] = function ($controller) {
    return new Ukmondo\Controller\HomeController();
};

$app->container['NotFoundController'] = function ($controller) {
    return new Ukmondo\Controller\NotFoundController();
};

$app->run();
