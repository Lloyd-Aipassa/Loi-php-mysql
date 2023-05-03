<?php
$pageTitle = '';

include('controller/class.contr.familieLid.php');
$addFamilieObj = new FamilieLidContr();
$addFamilieObj -> CreateFamilieLid();
?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/add-familie-lid.css">
    
    <title><?php $pageTitle; ?></title>
</head>

<?php include('components/header.php') ?>

<div class="grid-container">
    <aside>
        <?php include('components/nav.php') ?>
    </aside>
    <main class="main">
        <section class="card-form">
            <H2>Voeg een familie lid toe</H2>
            <form action="add-familie-lid.php" method="POST">
                <label>Voornaam</label>
                <input type="text" name="naam" required value="">
                <label>Geboortedatum</label>
                <input type="date" name="geboorteDatum" required value=''>
                <input type="hidden" name="lid_id" value='<?= $_GET['id']; ?>'>
                <button type="submit" value="submit" name="submit">voeg toe</button>
            </form>
        </section>
    </main>
</div>



<?php include('components/footer.php') ?>


</html>

