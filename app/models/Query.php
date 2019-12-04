<?php

namespace app\models;

class Query extends Crud
{

    protected $sql;
    protected $table;
    protected $attributes;

    public function createSelect(string $select)
    {
        $this->sql = $select;
    }

    public function createInsert($table, $attributes)
    {
        $this->table      = $table;
        $this->attributes = (array) $attributes;
    }

}
