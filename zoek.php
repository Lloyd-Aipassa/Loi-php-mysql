<?php
$pageTitle = 'ZOEK EEN FAMILIE';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/zoek.css">
    <title><?php $pageTitle ?></title>
</head>

<?php include('components/header.php') ?>


<div class="grid-container">
    <aside>
        <?php include('components/nav.php') ?>
    </aside>
    <main class="main">
        <section class="card-form">
            <form method="POST" action="zoek-resultaat.php">
                <label>
                    <p>Zoek een achternaam of een adres</p>
                </label>
                <input type="text" placeholder="Vul een achternaam of een adres in..." name="zoek" value=''>
                <button type="submit" name="submit">Zoek</button>
            </form>
        </section>
    </main>
</div>
<?php include('components/footer.php') ?>
</html>

