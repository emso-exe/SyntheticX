<?php

namespace app\models;

class Query extends Crud
{

    protected $sql;

    public function createSelect(string $select)
    {
        $this->sql = $select;
    }

    public function createInsert($table, $attributes)
    {
        $insert = "INSERT INTO {$table} (";
        $insert .= implode(',', array_keys($attributes)) . " VALUES (";
        $insert .= ":" . implode(', :', array_keys($attributes)) . ");";

        $this->sql = $insert;
    }

}
