<?php

use app\classes\Layout;
use app\classes\Validation;
use app\models\Query;

if (!empty($_POST)) {

    $validation  = new Validation;
    $validate    = $validation->validate($_POST);
    
    $attributes1 = [
        'id_matricula' => $validate->{'id_matricula'},
        'nm_usuario'   => $validate->{'nm_usuario'},
        'id_cargo'     => $validate->{'id_cargo'},
        'id_status'    => $validate->{'id_status'} = 1,
    ];

    $attributes2 = [
        'id_matricula' => $validate->{'id_matricula'},
        'ds_login'     => $validate->{'ds_login'},
        'ps_senha'     => $validate->{'ps_senha'} = 0,
    ];

    $user = new Query;

    $user->createInsert('usuario', $attributes1);
    $user->insert();
    $user->createInsert('login', $attributes2);
    $user->insert();
}

$layout->add('layout_content');

$content = new Layout;

$content->add('user_create');
