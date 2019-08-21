<?php

namespace app\models;

use PDO;

class Connection
{

    public static function connect()
    {

        $config = "../database/migrations/config.json";
        $config = file_get_contents($config);
        $config = json_decode($config);

        $pdo = new PDO(
            "{$config->db->drive}:
            host={$config->db->host};
            dbname={$config->db->dbname};
            charset={$config->db->charset}",
            $config->db->username,
            $config->db->password
        );        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
    }

}
