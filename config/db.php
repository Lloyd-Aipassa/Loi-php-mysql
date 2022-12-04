<?php

$conn = mysqli_connect('localhost', 'lloyd', 'lloyd123', 'lloyd');

// $conn = mysqli_connect('loi.brooklynwebdesign.nl', 'lloyd', 'L249m66a', 'lloyd');

// **check connection**
if (!$conn) {
    echo 'Connetion error: ' . mysqli_connect_error();
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
