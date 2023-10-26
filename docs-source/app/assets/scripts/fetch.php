<?php // {"autorun":true, "persist":true, "single-expression": false, "render-as": "text"}

$url = 'https://api.weather.gov/gridpoints/TOP/40,74/forecast';

$window = $window ?? new Vrzno;
$window->fetch($url)
->then(function($r) { return $r->json(); })
->then(function($r) { var_dump($r); });
