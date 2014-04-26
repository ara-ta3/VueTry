<?php

$app->get('/', function () use($app) {
        return $app['twig']->render('index.twig',[
        ]);
})
->bind('index');

$app->post('/', function() use ($app) {
    $message = $app['request']->get('message');
    return $app->json([
        'result' => true,
        'message' => $message,
    ], 201);
});
