<?php

namespace App;
use function Garp\Functional\call;

function buildRoutes ($routes, $router) {
  foreach ($routes as $route) {
    call(
      $route['method'],
      [$route['path'], $route['handler']],
      $router
    );
  }
};
