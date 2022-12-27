<?php
$pageTitle = '';

// include('view/class.view.editFamilieLid.php');
include('controller/class.contr.editFamilieLid.php');
// $editLidObj = new editFamilieLidView();
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
                <input type="text" name="naam" value="<?= $editLidObj->showEditFamilieLid()->naam; ?>">
                <label>Geboortedatum</label>
                <input type="date" name="geboorteDatum" value="<?= $editLidObj->showEditFamilieLid()->geboorteDatum; ?>">

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