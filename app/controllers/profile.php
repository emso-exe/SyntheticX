<?php

//use app\models\User;
use app\classes\Layout;

//$user = new User;

/*require "../app/functions/helpers.php";
dd($user->all());*/

//$users = $user->all();

$layout->add('layout_content');

$content = new Layout;

$content->add('profile');

//require "../app/views/index.php";
