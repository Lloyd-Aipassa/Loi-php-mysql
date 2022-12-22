<?php

$dsn = 'mysql:=localhost; dbname=lloyd';
$username = 'lloyd';
$password = 'lloyd123';
$options = [];

// $dsn = 'mysql:=loi.brooklynwebdesign.nl; dbname=lloyd';
// $username = 'lloyd';
// $password = 'L249m66a';
// $options = [];

try {
    $conn = new PDO($dsn, $username, $password, $options);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // zet een defealt fetch 

} catch(PDOException $e) { 
} 





// ***********Maak een class voor een toekomstige pdo connectie*************

// class Dbh
// {
//     private $serverName;
//     private $userName;
//     private $password;
//     private $dbName;


//     public function connect()
//     {
//         $this->serverName = "localhost";
//         $this->userName = "lloyd";
//         $this->password = "lloyd123";
//         $this->dbName = "lloyd";
//     }
// }
