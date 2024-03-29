<?php

$pageTitle = 'Families';
include('view/class.view.families.php');
$familiesObj = new FamiliesView();
?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
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
                <a href="add-familie.php"><button class="add-fam">Voeg een nieuwe familie toe</button></a>
                <div class="col">
                    <table>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Achternaam</th>
                            <th>Adres</th>
                            <th>Edit-Delete-Nieuw</th>
                        </tr>
                        <?php foreach ($familiesObj->ShowFamilies() as $familie) : ?>
                            <tr>
                                <!-- <td data-cell="id"><?= $familie->id; ?></td> -->
                                <td data-cell="Achternaam"><a class="fam-link" href="familie.php?id=<?= $familie->id ?>"> <?= $familie->achternaam; ?></a></td>
                                <td data-cell="Adres"><?= $familie->adres; ?></td>
                                <td><a href="edit-familie.php?id=<?= $familie->id ?>"><button class="details-fam">edit</button></a>
                                    <a onclick="return confirm('Weet je zeker dat je deze familie wil verwijderen?')" href="delete-familie.php?id=<?= $familie->id ?>"> <button class="details-fam2">delete</button></a>
                                    <a href="add-familie-lid.php?id=<?= $familie->id ?>"><button class="details-fam3 fam-kleur">Nieuw lid</button></a>
                                </td>
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

