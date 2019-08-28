<?php

use app\models\Query;
use app\classes\Layout;

$user = new Query;
$user->createQuery(
    "select * from usuario as u
    inner join login as l on u.id_matricula = l.id_matricula
    inner join cargo as c on u.id_cargo = c.id_cargo
    inner join setor as s on c.id_setor = s.id_setor
    inner join perfil as p on c.id_perfil = p.id_perfil
    inner join status as st on u.id_status = st.id_status;"
);

$users = $user->all();

$layout->add('layout_content');

$content = new Layout;

$content->add('user_search');

//require "../app/views/index.php";
