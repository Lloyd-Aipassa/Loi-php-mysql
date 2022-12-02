<?php

$conn = mysqli_connect('localhost', 'lloyd', 'lloyd123', 'lloyd');

// check connection
if (!$conn) {
    echo 'Connetion error: ' . mysqli_connect_error();
}

?>