<?php

use app\classes\Layout;
use app\classes\Validation;
use app\models\Query;

$validation = new Validation;
$validate = $validation->validate($_POST);

$user = new Query;


/*require "../app/functions/helpers.php";
dd($user->all());*/

//$users = $user->all();

$layout->add('layout_content');

$content = new Layout;

$content->add('user_create');

//require "../app/views/index.php";
