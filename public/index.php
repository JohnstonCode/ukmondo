<?php

require __DIR__ . '/../vendor/autoload.php';

$container = new Pimple\Container();
$routes = require_once __DIR__ . '/../config/routes.php';   

$app = new Ukmondo\Application($container, $routes);

$app->container['HomeController'] = function ($controller) {
    return new Ukmondo\Controller\HomeController($controller['View']);
};

$app->container['NotFoundController'] = function ($controller) {
    return new Ukmondo\Controller\NotFoundController();
};

$app->container['View'] = function () {
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/../src/Views');
    $twig = new Twig_Environment($loader, [
        'cache' => __DIR__ . '/../var/views',
    ]);

    return $twig;
};

$app->run();
