<?php

// $dsn = 'mysql:=localhost; dbname=lloyd';
// $username = 'lloyd';
// $password = 'lloyd123';
// $options = [];

// $dsn = 'mysql:=loi.brooklynwebdesign.nl; dbname=lloyd';
// $username = 'lloyd';
// $password = 'L249m66a';
// $options = [];

try {
    $conn = new PDO($dsn, $username, $password, $options);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // zet een defealt fetch 

} catch(PDOException $e) { 
} 




