<?php

class Database
{
    public $conn;

    public function __construct($config, $username="root", $password="")
    {
        $dsn = "mysql:" . http_build_query($config, "", ";");
        $this->conn = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
    }

    public function query($query_string, $params=[])
    {
        $statement = $this->conn->prepare(
            $query_string
        );
        $statement->execute($params);
        return $statement;
    }

}