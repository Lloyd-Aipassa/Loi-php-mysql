<?php
$pageTitle = 'Families';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title><?php $pageTitle ?></title>
</head>

<?php include('components/header.php') ?>


<div class="grid-container">
    <aside>
        <?php include('components/nav.php') ?>
    </aside>
    <main class="main">
        Main content

    </main>
</div>

<?php include('components/footer.php') ?>


</html>

<style>
    /* @media screen and (max-width: 600px) {
        .grid-container {
            position: relative;
            display: block;
            min-height: 75vh;
        }

        main {
            color: white;
            background-color: black;
            width: 100%;
            padding: 50px;
            min-height: 75vh;
        }

        aside {
            position: absolute;
            width: 100%;
            transform: translatex(-90%);
            transition: all 500ms;
            background-color: coral;
            top: 0;
            left: 0;
        }

        .active {
            position: absolute;
            width: 100%;
            transform: translatex(0%);

            background-color: red;
            top: 0;
            left: 0;
        }
    } */
</style>