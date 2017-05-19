<?php

use Silex\Application as Router;
use function App\buildRoutes;

require_once __DIR__.'/../vendor/autoload.php';
$routes = require_once __DIR__.'/../config/routes.php';

$router = new Router();
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$router['debug'];

buildRoutes($routes, $router);

$router->run();
