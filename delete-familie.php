<?php

include('config/db.php');

$id = $_GET['id'];
$sql = 'DELETE FROM families Where id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])); {
    header("location: index.php");
}
