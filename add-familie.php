<?php
$pageTitle = '';

include('controller/class.contr.families.php');
$addFamilieObj = new FamiliesContr();
$addFamilieObj -> CreateFamilies();
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/add-familie.css">
    <title><?php $pageTitle; ?></title>
</head>

<?php include('components/header.php') ?>

<div class="grid-container">
    <aside>
        <?php include('components/nav.php') ?>
    </aside>
    <main class="main">
        <section class="card-form">
            <H2>Voeg een familie toe</H2>
            <form action="add-familie.php" method="POST">
                <label>achternaam</label>
                <input type="text" name="achternaam" required value="">
                <label>Adres</label>
                <input type="text" name="adres" required value=''>
                <button type="submit" value="submit" name="submit">voeg toe</button>
            </form>
        </section>
    </main>
</div>

<?php include('components/footer.php') ?>


</html>

