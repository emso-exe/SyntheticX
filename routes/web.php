<?php

require "../bootstrap/bootstrap.php";

use app\classes\Layout;
use app\classes\Routes;
use app\classes\Uri;

$routes = [

    '/'     => 'app/controllers/login',
    '/home' => 'app/controllers/index',

];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');
