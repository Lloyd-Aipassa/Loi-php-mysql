<?php
$pageTitle = 'Contributie';
include('class/test.php');
$contributieObj = new Test();
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

<button onclick="history.go(-1)">Go Back 2 Pages</button>

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
                            <th>id</th>
                            <th>Naam</th>
                            <th>Leeftijd</th>
                            <th>bedrag</th>
                        </tr>
                        <?php foreach ($contributieObj->getContributie() as $lid) : ?>
                            <tr>
                                <td><?= $lid->id; ?></td>
                                <td><?= $lid->naam; ?></td>
                                <td><?= $lid->leeftijd; ?></td>
                                <td><?= $lid->bedrag; ?></td>
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