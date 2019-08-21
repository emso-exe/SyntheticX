<?php

namespace app\models;

use app\models\Connection;

abstract class Crud
{

    protected $connection;

    public function __construct()
    {
        $this->connection = Connection::connect();
    }

    public function all()
    {

        $sql  = "SELECT * FROM {$this->table}";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

}
