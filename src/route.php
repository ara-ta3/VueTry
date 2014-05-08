<?php

$app->get('/', function () use($app) {
        return $app['twig']->render('index.twig',[
        ]);
})
->bind('index');

$app->post('/login', function() use ($app) {
    $user = $app['request']->get('username');
    $pass = $app['request']->get('password');

    $result = [
        'result' => 'ng',
        'message' => 'ユーザかパスワードが間違っています',
    ];
    if( $user === 'hogeuser' && $pass === 'hogepass' )
    {
        $result = [
            'result' => 'ok',
            'message' => 'ログイン成功',
            ];
    }

    return $app->json($result, 201);
});
