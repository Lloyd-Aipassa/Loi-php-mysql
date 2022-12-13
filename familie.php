<?php
$pageTitle = 'Familie';

include('config/db.php');

$id2 = $_GET['id'];
$sql = "SELECT 
    a.achternaam,
    a.adres,
    b.id,
    b.naam,
    b.geboorteDatum,
    b.lid_id,
    b.leeftijd,
    b.soort_lid
    
    FROM 
    families AS a
    INNER JOIN familieleden AS b ON(a.id = b.lid_id)
    Where lid_id=:id";
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id2]);
$families = $statement->fetchAll();
// print_r($families)
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
                <!-- <button><a href="add-familie.php">Nieuwe familie</a></button> -->
                <div class="col" style="overflow-x:auto;">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Naam</th>
                            <th>Achternaam</th>
                            <th>Adres</th>
                            <th>Geboorte datum</th>
                            <th>Leeftijd</th>
                            <th>Soort lid</th>
                        </tr>
                        <?php foreach ($families as $familie) : ?>
                            <tr>
                                <td><?= $familie->id; ?></td>
                                <td><?= $familie->naam; ?></td>
                                <td><?= $familie->achternaam; ?></td>
                                <td><?= $familie->adres; ?></td>
                                <td><?= $familie->geboorteDatum; ?></td>
                                <td><?= $familie->leeftijd; ?></td>
                                <td><?= $familie->soort_lid; ?></td>
                                <td><button class="details-fam"><a href="edit-familie-lid.php?id=<?= $familie->id ?>">edit</a></button>
                                    <button class="details-fam2"><a onclick="return confirm('Weet je zeker dat je deze familie wil verwijderen?')" href="delete-familie-lid.php?id=<?= $familie->id ?>">delete</a></button>
                                    <!-- <button class="details-fam fam-kleur"><a href="add-familie-lid.php?id=<?= $familie->id ?>">Nieuw lid</a></button> -->
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