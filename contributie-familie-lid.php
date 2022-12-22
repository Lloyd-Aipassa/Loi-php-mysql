<?php
$pageTitle = 'Contributie betalen';

include('config/db.php');

$id2 = $_GET['id'];
$sql = "SELECT 
    families.achternaam,
    families.adres,
    familieleden.id,
    familieleden.naam,
    familieleden.geboorteDatum,
    familieleden.lid_id,
    familieleden.leeftijd,
    familieleden.soort_lid,
    contributie.bedrag
    FROM familieleden
    left JOIN families ON(families.id = familieleden.lid_id)
    left JOIN contributie ON(familieleden.contributie_id = contributie.id)
    Where  familieleden.id=:id;";
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id2]);
$families = $statement->fetchAll();

if (isset($_POST['naam']) && ($_POST['geboorteDatum']) && ($_POST['lid_id'])) {
    $naam = $_POST['naam'];
    $geboorteDatum = $_POST['geboorteDatum'];
    $lid_id = $_POST['lid_id'];
    $sql = 'INSERT INTO familieleden(naam, geboorteDatum, lid_id) VALUES(:naam, :geboorteDatum, :lid_id); 

            -- ******functie leeftijd******
            UPDATE familieleden SET leeftijd = TIMESTAMPDIFF(YEAR, geboorteDatum, CURDATE());

            -- ******mutatie soort lid zonder extra database******
            -- UPDATE familieleden SET soort_lid = CASE 
            -- WHEN leeftijd>=51 THEN \'Oudere\' 
            -- WHEN leeftijd>=18 THEN \'senior\' 
            -- WHEN leeftijd >=13 THEN \'junior\' 
            -- WHEN leeftijd >=7 THEN \'aspirant\' 
            -- ELSE \'jeugd\' END;

            -- ******mutatie voor soort lid******
            UPDATE familieleden SET soort_id = CASE 
            WHEN leeftijd>=51 THEN \'5\' 
            WHEN leeftijd>=18 THEN \'4\' 
            WHEN leeftijd >=13 THEN \'3\' 
            WHEN leeftijd >=7 THEN \'2\' 
            ELSE \'1\' END ORDER BY id DESC LIMIT 1;

            -- ******mutaties voor contributie****** 
            UPDATE familieleden SET contributie_id = soort_id;
            UPDATE familieleden SET betaald = contributie_id;
            ';
    $statement = $conn->prepare($sql);
    if ($statement->execute([':naam' => $naam, ':geboorteDatum' => $geboorteDatum, ':lid_id' => $lid_id])) {
        header("location: index.php");
    }
}
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
                        <?php foreach ($families as $familie) : ?>
                            <tr>
                                <td><?= $familie->id; ?></td>
                                <td><?= $familie->naam; ?></td>
                                <td><?= $familie->achternaam; ?></td>
                                <td><?= $familie->adres; ?></td>
                                <td><?= $familie->geboorteDatum; ?></td>
                                <td><?= $familie->leeftijd; ?></td>
                                <td><?= $familie->soort_lid; ?></td>
                                <td><?= $familie->bedrag; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

        <section class="card-form">
            <H2>Voeg een familie lid toe</H2>
            <form action="add-familie-lid.php" method="POST">
                <label>Voornaam</label>
                <input type="text" name="naam" value="">
                <label>Geboortedatum</label>
                <input type="date" name="geboorteDatum" value=''>
                <input type="hidden" name="lid_id" value='<?= $_GET['id']; ?>'>
                <button type="submit" value="submit" name="submit">voeg toe</button>
                <button onclick="history.go(-2)">voeg toe2</button>
            </form>
        </section>
    </main>
</div>



<?php include('components/footer.php') ?>


</html>

<style>
    section {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    section h2 {
        font-size: 30px;
        margin-bottom: 30px;
        text-align: center;
    }

    form {
        width: 100%;
        max-width: 800px;
        display: flex;
        flex-direction: column;
        border: 1px solid #fff;
        padding: 20px;
        border-radius: 8px;
        min-height: 400px;
    }

    form p {
        color: red;
        margin-bottom: 20px;
    }

    form button {
        margin: 0 30%;
        padding: 20px;
        background-color: coral;
        color: #fff;
        border-radius: 8px;
        cursor: pointer;
        font-size: 20px;
        text-transform: uppercase;
        margin-top: 50px;
    }

    input {
        padding: 10px;
        margin: 20px 0;
        border: none;
        border-bottom: 1px solid #fff;
        background-color: #ffffff00;
        color: #fff;
    }

    input:focus-visible {
        outline: none;
    }
</style>