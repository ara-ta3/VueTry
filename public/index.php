<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(),[
    'twig.path' => __DIR__ . '/../views',
]);

$app['debug'] = true;

require_once __DIR__ . '/../src/route.php';

$app->run();
