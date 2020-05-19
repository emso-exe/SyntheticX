<?php

use app\classes\Layout;
use app\classes\Validation;
use app\models\Query;

if ($_POST) {

    $validation = new Validation;
    $validate   = $validation->validate($_POST);

    $user = new Query;
    $user->createDelete('usuario', ['id_matricula' => $validate->{'id_matricula'}]);
    $row = $user->delete();

    $jsonuser = base64_encode(json_encode($row));

    header('Location: user_search_edit?u=' . $jsonuser . '');
}

if ($_GET) {

    $validation = new Validation;
    $validate   = $validation->validate($_GET);

    $id = $validate->{'id'};
}

$query_user = "SELECT u.id_matricula, nm_usuario, nm_setor, nm_cargo, ds_login, ds_perfil, u.dt_create, u.dt_update, ds_status, s.id_setor, c.id_cargo, st.id_status
FROM usuario AS u
INNER JOIN login AS l ON u.id_matricula = l.id_matricula
INNER JOIN cargo AS c ON u.id_cargo = c.id_cargo
INNER JOIN setor AS s ON c.id_setor = s.id_setor
INNER JOIN perfil AS p ON c.id_perfil = p.id_perfil
INNER JOIN status AS st ON u.id_status = st.id_status
WHERE u.id_matricula = {$id};";

$user = new Query;
$user->createSelect($query_user);
$found = $user->all();

$layout->add('layout_content');

$content = new Layout;

$content->add('user_delete');
