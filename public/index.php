<?php
require_once(dirname(__FILE__, 2). '/src/config/config.php');

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/innout/' || $uri === '/innout/index.php') {
    $uri = '/day_records.php';
} 

$pathToRemove = '/innout/';

$uri = str_replace($pathToRemove, '', $uri);

require_once(CONTROLLER_PATH . "/{$uri}");
