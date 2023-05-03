<?php
$pageTitle = '';

include('controller/class.contr.editFamilieLid.php');
$editLidObj = new editFamilieLidContr();
$editLidObj->updateFamilieLid();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/edit-familie-lid.css">
    <title><?php $pageTitle; ?></title>
</head>

<?php include('components/header.php') ?>
<div class="grid-container">
    <aside>
        <?php include('components/nav.php') ?>
    </aside>
    <main class="main">
        <section class="card-form">
            <H2>Familie lid aanpassen</H2>
            <form method="POST">
                <label>Voornaam</label>
                <input type="text" required name="naam" value="<?= $editLidObj->showEditFamilieLid()->naam; ?>">
                <label>Geboortedatum</label>
                <input type="date" required name="geboorteDatum" value="<?= $editLidObj->showEditFamilieLid()->geboorteDatum; ?>">
                <button type="submit" value="submit" name="submit">voeg toe</button>
            </form>
        </section>
    </main>
</div>
<?php include('components/footer.php') ?>


</html>

