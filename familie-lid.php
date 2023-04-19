<?php
$pageTitle = 'Familie lid';
?>

<?php
include('class/test.php');
$familiesObj = new Test();
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
        <div class="center">
            <div class="row">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Achternaam</th>
                        <th>Adres</th>
                    </tr>
                    <?php

                    foreach ($familiesObj->getFamilies() as $familie) : ?>
                        <tr>
                            <td><?= $familie->id; ?></td>
                            <td><a href="familie.php?id=<?= $familie->id ?>"> <?= $familie->achternaam; ?></a></td>
                            <td><?= $familie->adres; ?></td>
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

<style>
    hr.solid {
        border-top: 1px solid #fff;
        margin: 10px 10px 10px 0;
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