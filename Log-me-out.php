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

<style>
    .main2 {
        height: 100vh;
    }

    section {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }



    form {
        width: 100%;
        max-width: 800px;
        display: flex;
        flex-direction: column;
        border: 1px solid #fff;
        padding: 20px;
        border-radius: 8px;
        min-height: 200px;
    }

    form p {
        color: #fff;
        margin-bottom: -50px;
        text-align: center;

    }

    span {
        width: 100%;
        display: flex;
        height: 230px;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    form a.logout,
    form a.back {
        text-align: center;
        padding: 20px;
        max-width: 200px;
        background-color: coral;
        color: #fff;
        border-radius: 8px;
        cursor: pointer;
        font-size: 20px;
        text-transform: uppercase;
        border: none;
        border-bottom: 5px solid rgb(226, 77, 22);

    }

    form a.logout {
        background-color: #dc143c;
        border-bottom: 5px solid #a80c2b;
    }

    form a.logout:hover {
        background-color: #dc143c;
        border-bottom: none;
    }
    form a.back:hover {
        background-color: coral;
        border-bottom: none;
    }
</style>