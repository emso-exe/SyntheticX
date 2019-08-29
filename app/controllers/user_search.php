<?php

use app\models\Query;
use app\classes\Layout;

$user = new Query;
$user->createQuery(
    "SELECT u.id_matricula, nm_usuario, nm_setor, nm_cargo, ds_login, ds_perfil, u.dt_create, u.dt_update, ds_status 
    FROM usuario AS u
    INNER JOIN login AS l ON u.id_matricula = l.id_matricula
    INNER JOIN cargo AS c ON u.id_cargo = c.id_cargo
    INNER JOIN setor AS s ON c.id_setor = s.id_setor
    INNER JOIN perfil AS p ON c.id_perfil = p.id_perfil
    INNER JOIN status AS st ON u.id_status = st.id_status;"
);

$users = $user->all();

$layout->add('layout_content');

$content = new Layout;

$content->add('user_search');

//require "../app/views/index.php";
