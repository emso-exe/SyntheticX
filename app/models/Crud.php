<?php

namespace app\models;

use app\models\Connection;

abstract class Crud
{

    protected $connection;
    protected $path = "../database/migrations/";
    protected $file = "config_db.ini";

    public function __construct()
    {
        $this->connection = Connection::getConnection($this->path . $this->file);
    }

    public function all()
    {

        $sql  = "SELECT * FROM {$this->table}";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

}
