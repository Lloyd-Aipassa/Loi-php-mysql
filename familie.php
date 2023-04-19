<?php
$pageTitle = 'Familieleden';
include('view/class.view.familie.php');
$familieObj = new FamilieView();
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
                            <th>Naam</th>
                            <th>Achternaam</th>
                            <th>Adres</th>
                            <th>Geboorte datum</th>
                            <th>Leeftijd</th>
                            <th>Soort lid</th>
                            <th>Contributie</th>
                        </tr>
                        <?php foreach ($familieObj->showFamilie() as $familie) : ?>
                            <tr>
                                <td><?= $familie->id; ?></td>
                                <td><?= $familie->naam; ?></td>
                                <td><?= $familie->achternaam; ?></td>
                                <td><?= $familie->adres; ?></td>
                                <td><?= $familie->geboorteDatum; ?></td>
                                <td><?= $familie->leeftijd; ?></td>
                                <td><?= $familie->soort_lid; ?></td>
                                <td><?= $familie->bedrag; ?></td>
                                <td><a href="edit-familie-lid.php?id=<?= $familie->id ?>"><button class="details-fam">edit</button></a>
                                    <a onclick="return confirm('Weet je zeker dat je deze persoon wil verwijderen?')" href="delete-familie-lid.php?id=<?= $familie->id ?>"><button class="details-fam2">delete</button></a>
                                    <!-- <a href="contributie-familie-lid.php?id=<?= $familie->id ?>"><button class="details-fam3 fam-kleur">Betalen</button></a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php foreach ($familieObj->showContibutieTotaal() as $contributieTotaal) : ?>
                        <table>
                            <tr>
                                <th>contributie totaal: </th>
                                <th>€ <?= $contributieTotaal->totaal; ?>,- </th>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include('components/footer.php') ?>


</html>