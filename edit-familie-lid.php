<?php
$pageTitle = 'Familie aanpassen';
?>

<?php

include('config/db.php');

//Pak ID uit superglobal met GET method
$id = $_GET['id'];

$sql = 'SELECT * FROM familieleden Where id=:id';
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id]);
$familielid = $statement->fetch(PDO::FETCH_OBJ);

if (isset($_POST['naam']) && ($_POST['geboorteDatum'])) {
    $naam = $_POST['naam'];
    $geboorteDatum = $_POST['geboorteDatum'];
    $sql = 'UPDATE familieleden SET naam=:naam, geboorteDatum=:geboorteDatum WHERE id=:id;
    
    -- ******functie leeftijd******
UPDATE familieleden SET leeftijd = TIMESTAMPDIFF(YEAR, geboorteDatum, CURDATE()) WHERE id=:id;

-- ******mutatie voor soort lid******
UPDATE familieleden SET soort_id = CASE
WHEN leeftijd>=51 THEN \'5\'
WHEN leeftijd>=18 THEN \'4\'
WHEN leeftijd >=13 THEN \'3\'
WHEN leeftijd >=7 THEN \'2\'
ELSE \'1\' END WHERE id=:id;

-- ******mutatie voor contributie******
UPDATE familieleden SET contributie_id = soort_id WHERE id=:id;
UPDATE familieleden SET betaald = contributie_id WHERE id=:id;
    ';

    $statement = $conn->prepare($sql);
    if ($statement->execute([':naam' => $naam, ':geboorteDatum' => $geboorteDatum, ':id' => $id])) {
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
        <section class="card-form">
            <H2>Familie aanpassen</H2>
            <form method="POST">
                <label>Voornaam</label>
            
                <input type="text" name="naam" value="<?= $familielid->naam; ?>">
                <label>Geboortedatum</label>
          
                <input type="date" name="geboorteDatum" value="<?= $familielid->geboorteDatum; ?>">

                <button type="submit" value="submit" name="submit">voeg toe</button>
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
</style>