<?php

use app\models\Table;
use app\classes\Layout;

$user = new Table;

//dd($user->all());

$user = $user->all();
var_dump($user);

$layout->add('layout_content');

$content = new Layout;

$content->add('user_search');

//require "../app/views/index.php";
