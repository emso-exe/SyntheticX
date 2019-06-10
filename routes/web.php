<?php

require "../bootstrap/bootstrap.php";

use app\classes\Layout;
use app\classes\Routes;
use app\classes\Uri;

$routes = [

    '/'            => 'config/login',
    '/images'      => 'public/images',
    '/user_create' => 'controllers/user_create',
    '/user_store'  => 'controllers/user_store',
    '/user_edit'   => 'controllers/user_edit',
    '/user_update' => 'controllers/user_update',

];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');
