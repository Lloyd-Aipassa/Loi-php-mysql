<?php
$pageTitle = 'Families';
?>

<?php

include('config/db.php');
include('classes/show-families.php');

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
    <?php include('forms/form-input-families.php') ?>
</div>

<?php include('components/footer.php') ?>


</html>

<style>
    hr.solid {
        border-top: 1px solid #fff;
        margin: 10px 10px 10px 0;
    }

    .content {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        justify-content: space-between;
        /* align-items: center; */
    }
</style>