<?php

require "../bootstrap/bootstrap.php";

use app\classes\Layout;
use app\classes\Routes;
use app\classes\Uri;

$code = Uri::make(Uri::load());
empty($code[2]) ? $code[2]='': $code[2];

$routes = [

    '/'                            => 'app/controllers/login',
    '/reset'                       => 'app/controllers/reset',
    '/forgot'                      => 'app/controllers/forgot',
    '/dashboard'                   => 'app/controllers/dashboard',
    '/profile'                     => 'app/controllers/profile',
    '/user_create'                 => 'app/controllers/user_create',
    '/user_search/'.$code[2].''    => 'app/controllers/user_search',
    '/user_edit/'.$code[2].''      => 'app/controllers/user_edit',
    '/user_delete'                 => 'app/controllers/user_delete',
    '/login_pass_search_edit'      => 'app/controllers/login_pass_search_edit',
    '/login_pass_edit'             => 'app/controllers/login_pass_edit',
    '/login_pass_search'           => 'app/controllers/login_pass_search',
    '/sector_position_create'      => 'app/controllers/sector_position_create',
    '/sector_position_search'      => 'app/controllers/sector_position_search',
    '/sector_position_search_edit' => 'app/controllers/sector_position_search_edit',
    '/sector_position_edit'        => 'app/controllers/sector_position_edit',
    '/sector_position_delete'      => 'app/controllers/sector_position_delete',

];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');
