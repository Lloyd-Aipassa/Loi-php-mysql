<?php
$pageTitle = 'zoek lid';

include('view/class.view.zoek.php');
$loginObj = new ZoekResultaat();
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/zoek-resultaat.css">
    <title><?php $pageTitle ?></title>
</head>

<div class="grid-container">
    <main class="main">
        <?php $loginObj->ShowZoekResultaat(); ?>
        <h2><a href="zoek.php"><button class="details-fam">terug naar zoeken</button></a></h2>
    </main>
</div>

</html>