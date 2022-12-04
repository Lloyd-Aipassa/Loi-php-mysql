<?php

// Query de families -- ORDER BY IS DE VOLGORDE (nu op achternaam)
$sql = 'SELECT achternaam, adres, id FROM families ORDER BY achternaam';

// maak query
$result = mysqli_query($conn, $sql);

// fetch -- het resultaat van de databse rows in een array
$families = mysqli_fetch_all($result, MYSQLI_ASSOC);

//geheugen vrij maken
mysqli_free_result($result);

//conntie afsluiten (Close)
mysqli_close($conn);

// print_r($families);

?>