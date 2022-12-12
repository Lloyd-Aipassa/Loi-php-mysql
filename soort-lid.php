<?php
$pageTitle = 'Soort lid';

include('config/db.php');
$sql = "SELECT a.id, a.naam, a.leeftijd, a.soort_lid FROM familieleden AS a LEFT JOIN soortleden AS b ON a.id = b.id;
         UPDATE soortleden SET soort_lid = CASE 
            WHEN leeftijd>=51 THEN \'Oudere\' 
            WHEN leeftijd>=18 THEN \'senior\' 
            WHEN leeftijd >=13 THEN \'junior\' 
            WHEN leeftijd >=7 THEN \'aspirant\' 
            ELSE \'jeugd\' END;
";
$statement = $conn->prepare($sql);
$statement->execute();
$soortleden = $statement->fetchAll();
// print_r($soortleden);
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
                <button><a href="add-familie.php">Nieuwe familie</a></button>
                <div class="col">
                    <table>
                        <tr>

                            <th>id</th>
                            <th>Naam</th>
                            <th>Leeftijd</th>
                            <th>soort lid</th>
                        </tr>
                        <?php foreach ($soortleden as $lid) : ?>
                            <tr>
                                <td><?= $lid->id; ?></td>
                                <td><?= $lid->naam; ?></td>
                                <td><?= $lid->leeftijd; ?></td>
                                <td><?= $lid->soort_lid; ?></td>
                                <!-- <td><button class="details-fam"><a href="edit-familie.php?id=<?= $familie->id ?>">edit</a></button>
                                    <button class="details-fam"><a onclick="return confirm('Weet je zeker dat je deze familie wil verwijderen?')" href="delete-familie.php?id=<?= $familie->id ?>">delete</a></button>
                                    <button class="details-fam fam-kleur"><a href="add-familie-lid.php?id=<?= $familie->id ?>">Nieuw lid</a></button>
                                </td> -->
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