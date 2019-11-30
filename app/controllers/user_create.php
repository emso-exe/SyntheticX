<?php

use app\classes\Layout;
use app\classes\Validation;
use app\models\Query;

$validation = new Validation;
$validate   = $validation->validate($_POST);

$user = new Query;

$cadastrado = $user->createInsert('usuario', $validate);

//$new_user = $user->insert();

$layout->add('layout_content');

$content = new Layout;

$content->add('user_create');
