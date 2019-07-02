<?php

require "../bootstrap/bootstrap.php";

use app\classes\Layout;
use app\classes\Routes;
use app\classes\Uri;

$routes = [

    '/'            => 'app/controllers/login',
    '/dashboard'   => 'app/controllers/dashboard',
    '/user_create' => 'app/controllers/user_create',

];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');
