<?php
$pageTitle = 'Families';
?>

<?php

include('config/db.php');

// Query de families -- ODER BY IS DE VOLGORDE (nu op achternaam)
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

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title><?php $pageTitle ?></title>
</head>

<?php include('components/header.php') ?>


<div class="grid-container">
    <aside>
        <?php include('components/nav.php') ?>
    </aside>
    <main class="main">
        <button><a href="add-familie.php">Toevoegen</a></button>
        <div class="row">
            <?php foreach ($families as $familie) { ?>
                <div class="col">
                    <div class="content">
                        <p> Achternaam: <?php echo htmlspecialchars($familie['achternaam']); ?></p>
                        <!-- <hr class="solid"> -->
                        <p> Adres: <?php echo htmlspecialchars($familie['adres']); ?></p>
                    </div>
                    <button class="deteils-fam"><a href="familie-details.php?id=<?php echo $familie['id']; ?>">details</a></button>
                </div>
            <?php } ?>
        </div>

    </main>
</div>

<?php include('components/footer.php') ?>


</html>

<style>
    hr.solid {
        border-top: 1px solid #fff;
        margin: 10px 10px 10px 0 ;
    }

    .content {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        justify-content: space-between;
        /* align-items: center; */
    }
</style>