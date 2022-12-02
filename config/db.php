<?php

$conn = mysqli_connect('loi.brooklynwebdesign.nl', 'lloyd', 'L249m66a', 'lloyd');

// check connection
if (!$conn) {
    echo 'Connetion error: ' . mysqli_connect_error();
}
