<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hi',function(){
    echo 'ว่าไง';
});
$app->get('/user/register',function(){
    echo '/user/register';
});
$app->get('/user/edit',function(){
    echo '/user/edit';
});
$app->get('/give/data',function(){
    echo '/give/data';
});
$app->get('/give/edit',function(){
    echo '/give/edit';
});
$app->get('/give/all',function(){
    echo '/give/all';
});
$app->get('/give/all/status',function(){
    echo '/give/all/status';
});
$app->get('/get/buff',function(){
    echo '/get/buff';
});
$app->get('/learn',function(){
    echo 'Knowledge';
});
$app->get('/search',function(){
    echo 'Buff Bank';
});
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();
