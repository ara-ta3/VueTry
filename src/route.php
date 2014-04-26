<?php

$app->get('/', function () use($app) {
        return $app['twig']->render('index.twig',[
        ]);
})
->bind('index');

$app->get('/user/register', function () use($app) {
        return $app['twig']->render('register.twig',[
        ]);
})
->bind('user.register');

$app->post('user/register', function () use ($app) {
    $name = $app['request']->get('name');
    $password = $app['request']->get('pass');
    $user = new framework\project\model\User(
        $name,
        $password,
        framework\project\lib\Dao::getInstance()
    );
    $isSuccess = $user->register();
    return $app->redirect($app['request']->getBaseUrl() .'/user/complete');
});

$app->get('/user/complete', function () use($app) {
        return $app['twig']->render('complete.twig',[
        ]);
})
->bind('user.conplete');

$app->get('/user/login', function () use($app) {
        return $app['twig']->render('login.twig',[
        ]);
})
->bind('user.login');

$app->post('user/login', function () use ($app) {
        return $app['twig']->render('login.twig',[
        ]);

});

$app->get('/message', function () use($app) {
        return $app['twig']->render('post.twig',[
        ]);
})
->bind('message');

$app->get('/message/post', function () use($app) {
        return $app['twig']->render('post.twig',[
        ]);
})
->bind('message.post');

$app->post('message/post-confirm', function () use ($app) {
        return $app['twig']->render('post.confirm.twig',[
        ]);
})
->bind('message.post-confirm');

$app->post('message/post-execute', function () use ($app) {
        return $app['twig']->render('post.confirm.twig',[
        ]);
})
->bind('message.post-execute');


