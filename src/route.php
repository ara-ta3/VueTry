<?php

$app->get('/', function () use($app) {
        return $app['twig']->render('index.twig',[
        ]);
})
->bind('index');

$app->post('/', function() use ($app) {
    echo json_encode([
        'hoge' => 'fuga',
        ]);
});
