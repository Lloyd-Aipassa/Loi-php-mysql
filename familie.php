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
                            <th>Naam</th>
                            <th>Achternaam</th>
                            <th>Adres</th>
                            <th>Geboorte datum</th>
                            <th>Leeftijd</th>
                            <th>Soort lid</th>
                            <th>Contributie</th>
                            <th>Crud</th>
                        </tr>
                        <?php foreach ($familieObj->showFamilie() as $familie) : ?>
                            <tr>
                                <td data-cell="Naam"><?= $familie->naam; ?></td>
                                <td data-cell="Achternaam"><?= $familie->achternaam; ?></td>
                                <td data-cell="Adres"><?= $familie->adres; ?></td>
                                <td data-cell="Geboorte datum"><?= $familie->geboorteDatum; ?></td>
                                <td data-cell="Leeftijd"><?= $familie->leeftijd; ?> jaar</td>
                                <td data-cell="Soort lid"><?= $familie->soort_lid; ?></td>
                                <td data-cell="Bedrag">€ <?= $familie->bedrag; ?>,- </td>
                                <td><a href="edit-familie-lid.php?id=<?= $familie->id ?>"><button class="details-fam">edit</button></a>
                                    <a onclick="return confirm('Weet je zeker dat je deze persoon wil verwijderen?')" href="delete-familie-lid.php?id=<?= $familie->id ?>"><button class="details-fam2">delete</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php foreach ($familieObj->showContibutieTotaal() as $contributieTotaal) : ?>
                        <table class="tabel-totaal">
                            <tr>
                                <th class="totaal">contributie totaal: </th>
                                <td class="totaal" data-cell="Totaal bedrag">€ <?= $contributieTotaal->totaal; ?>,- </td>
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

<style>
    /* nodig voor deze specifieke pagina */
    .tabel-totaal {
        background-color: black;
        margin-top: 10px;
    }

    .totaal:nth-last-child(1)::before {
        content: attr(data-cell) " :  ";
        font-weight: 600;
    }

    th.totaal {
        border-radius: 8px;
    }
</style>