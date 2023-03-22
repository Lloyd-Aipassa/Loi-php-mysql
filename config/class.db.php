<?php

// ***********Class voor Databse connevtie connectie*************

class Dbh
{
    // private $serverName = "localhost";
    // private $userName = "lloyd";
    // private $password = "lloyd123";
    // private $dbName =  "lloyd";

    private $serverName = "loi.brooklynwebdesign.nl";
    private $userName = "lloyd";
    private $password = "L249m66a";
    private $dbName =  "lloyd";


    protected function connect()
    {
        try {
            $dsn = 'mysql:host=' . $this->serverName . ';dbname=' . $this->dbName;
            $conn = new PDO($dsn, $this->userName, $this->password);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // zet een defealt fetch 
            return $conn;
        } catch (PDOException $e) {
        }
    }
}
