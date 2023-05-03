<?php
$pageTitle = 'Logout';
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/logout.css">
    <title><?php $pageTitle ?></title>
</head>



<div class="grid-container">

    <main class="main2">
        <section class="card-form">
            <form>
                <label>
                    <p>Weet je zeker dat je wil uitloggen?</p>
                </label>
                <span>
                    <a class="logout" href="components/logout.php">LOG OUT</a>
                    <a class="back" href="index.php">
                        <h3>BACK</h3>
                    </a>
                </span>
            </form>
        </section>
    </main>
</div>


</html>

