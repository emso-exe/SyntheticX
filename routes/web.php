<?php

require "../bootstrap/bootstrap.php";

use app\classes\Layout;
use app\classes\Routes;
use app\classes\Uri;

$routes = [

    '/'                 => 'app/controllers/login',
    '/dashboard'        => 'app/controllers/dashboard',
    '/user_create'      => 'app/controllers/user_create',
    '/user_search'      => 'app/controllers/user_search',
    '/user_search_edit' => 'app/controllers/user_search_edit',
    '/user_edit'        => 'app/controllers/user_edit',
    '/user_delete'      => 'app/controllers/user_delete',
];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');
