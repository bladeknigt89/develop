<?php

class Model
{
    private $conn;

    function __construct()
    {
        $this->establishCon();
    }

    function establishCon()
    {
        try {
            $this->conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }


    }

    public function loadConfigs()
    {
        $query = "select * from system_settings";
        $returnArray = $this->runQuery($query);
        return $returnArray;
    }

    public function runQuery($query)
    {
        $data = array();
        $sth = $this->conn->prepare($query);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }
}