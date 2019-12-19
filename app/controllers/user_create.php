<?php

use app\classes\Layout;
use app\classes\Validation;
use app\models\Query;
use app\models\Login;

if (!empty($_POST)) {

    $validation  = new Validation;
    $validate    = $validation->validate($_POST);
    
    $selectmax = new Query;
    $selectmax->createSelect("SELECT MAX(id_matricula) + 1 as newid FROM usuario;");
    $idmatricula = $selectmax->all();

    foreach ($idmatricula as $key => $value){
        $newmatricula = $value->newid;
    }

    $login = new Login;
    $newlogin = $login->createLogin($newmatricula, $validate->{'nm_usuario'});
    
    $attributes1 = [
        'id_matricula' => $newmatricula,
        'nm_usuario'   => $validate->{'nm_usuario'},
        'id_cargo'     => $validate->{'id_cargo'},
        'id_status'    => 1,
    ];

    $attributes2 = [
        'id_matricula' => $newmatricula,
        'ds_login'     => $newlogin,
        'ps_senha'     => 0,
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
