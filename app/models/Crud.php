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
        $list = $this->connection->prepare($this->sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function insert()
    {
        $sql = "INSERT INTO {$this->table} (";
        $sql .= implode(',', array_keys($this->attributes)) . ") VALUES (";
        $sql .= ":" . implode(', :', array_keys($this->attributes)) . ");";

        $insert = $this->connection->prepare($sql);
        return $insert->execute($this->attributes);
    }

}
