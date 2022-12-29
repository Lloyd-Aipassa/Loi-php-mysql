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
                    <p>Zoek een achternaam</p>
                </label>
                <input type="text" placeholder="Vul een achternaam of een adres in..." name="zoek" value=''>
                <button type="submit" name="submit">Zoek</button>
            </form>
        </section>
    </main>
</div>
<?php include('components/footer.php') ?>
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
        min-height: 200px;
    }

    form p {
        color: #fff;
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
        border: none;
        border-bottom: 5px solid rgb(226, 77, 22);
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