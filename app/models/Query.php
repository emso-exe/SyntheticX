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

        //echo "<h1>---> {$this->table}<br> ---> <pre>".print_r($this->attributes)."</pre></h1>";
    }

}
