<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

// Quando o / for requisitado a funçao sera chamada e a $app será usada.
//http://hostname/api
$app->get('/',function() use ($app) {
    echo "Welcome to REST API";
});

$app->get('/hello/:name', function($name) use ($app) {
    echo "Hi $name, welcome to the REST API's";
});

$app->run();
?>