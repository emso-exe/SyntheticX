<?php

namespace app\models;

class Query extends Crud
{

    protected $sql;

    public function createQuery(string $query)
    {
        $this->sql = $query;
    }

}
