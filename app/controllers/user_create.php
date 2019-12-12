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

$select1 = new Query;
$select1->createSelect("SELECT id_setor, nm_setor FROM setor ORDER BY nm_setor;");
$sector = $select1->all();

$select2 = new Query;
$select2->createSelect("SELECT id_cargo, id_setor, nm_cargo FROM cargo ORDER BY nm_cargo;");
$position = $select2->all();

$layout->add('layout_content');

$content = new Layout;

$content->add('user_create');
