<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
    echo 'hello';
});
$app['debug'] = false;
$app->get('/hello/{name}', function($name) use($app) {
    return "Hello, {$name}";
});
$app->run();