<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

$app = new Silex\Application();

$app['debug'] = true;

// Register Silex services
$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
$app->register(new UrlGeneratorServiceProvider());

// Set up routes
$app->get('/', function () use ($app) {
    return $app['twig']->render('index.twig', array());
})
->bind('home');

$app->post('/tessel-test', function (Request $request) use ($app) {
    $isJSON = strpos($request->headers->get('content-type'), 'application/json') >= 0;

    if ($isJSON) {
        $data = json_decode($request->getContent(), true);
    }

    $responseHeaders = array(
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => 'GET,PUT,POST,DELETE,OPTIONS',
        'Access-Control-Allow-Headers' => 'X-CSRF-Token, X-Requested-With, Accept, Accept-Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version, X-HTTP-Method-Override, Origin'
    );

    $data['id'] = strtotime('now');
    $data['name'] = 'Sander';

    return $app->json($data);
});

$app->get('/test/{data}', function ($data) use ($app) {
    $response = new Response($app->escape($data));
    $response->headers->set('Access-Control-Allow-Origin', '*');

    return $response;
});

$app->get('/test-page', function () use ($app) {
    return $app['twig']->render('testPage.twig', array());
});

return $app;
