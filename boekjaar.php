<?php
$pageTitle = 'Boekjaar';

include('view/class.view.boekjaar.php');
$boekjaarObj = new BoekjaarView();
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
                <div class="col fam-col" style="overflow-x:auto;">
                    <table>
                        <tr>
                          
                                <th>ID</th>
                                <th>Achternaam</th>
                                <th>Adres</th>
                                <th>Contributie</th>
                     
                        </tr>
                        
                        <?php foreach ($boekjaarObj ->ShowBoekjaar() as $contributieTotaal) : ?>
                            <tr>
                                <td><?= $contributieTotaal->id; ?></td>
                                <td><?= $contributieTotaal->achternaam; ?></td>
                                <td><?= $contributieTotaal->adres; ?></td>
                                <td>€<?= $contributieTotaal->totaal; ?>,- </td>
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