<?php
$pageTitle = 'Soort lid';
include('view/class.view.soortleden.php');
$soortLidObj = new SoortLedenView();
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title><?php $pageTitle; ?></title>
</head>

<?php include('components/header.php') ?>


<div class="grid-container">
    <aside>
        <?php include('components/nav.php') ?>
    </aside>
    <main class="main">
        <div class="center">
            <div class="row">
                <div class="col">
                    <table>
                        <tr>
                            <caption>Soort lid, gebaseerd op leeftijd</caption>
                            <th>id</th>
                            <th>Naam</th>
                            <th>Leeftijd</th>
                            <th>soort lid</th>
                        </tr>
                        <?php foreach ($soortLidObj->showSoortLeden() as $lid) : ?>
                            <tr>
                                <td data-cell="ID"><?= $lid->id; ?></td>
                                <td data-cell="Naam"><?= $lid->naam; ?></td>
                                <td data-cell="Leeftijd"><?= $lid->leeftijd; ?></td>
                                <td data-cell="Soort lid"><?= $lid->soort_lid; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include('components/footer.php') ?>


</html>