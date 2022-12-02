<?php
$pageTitle = 'Familie-details';

include('config/db.php');

if (isset($_POST['delete'])) {
    $id_delete = mysqli_real_escape_string($conn, $_POST['id_delete']);

    $sql = "DELETE FROM families WHERE id = $id_delete";

    if (mysqli_query($conn, $sql)) {
        //succes yes!!
        header('location: index.php'); {
            //geen yes
            echo 'query error:' . mysqli_error($conn);
        }
    }
}

//  check GET request id param -- (in de url)
if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // query single familie
    $sql = "SELECT * FROM families WHERE id = $id";

    // GET resultaat
    $result = mysqli_query($conn, $sql);

    //fetch resltaat in een array
    $familie = mysqli_fetch_assoc($result);

    //free mem
    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($familie);
}
?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title> <?php echo $pageTitle; ?> </title>
</head>

<?php include('components/header.php') ?>


<div class="grid-container">
    <aside>
        <?php include('components/nav.php') ?>
    </aside>
    <main class="main">
        <div class="card-center">
            <div class="card-details">
                <?php if ($familie) : ?>
                    <h1>Familie details</h1>
                    <h3>Achternaaam: <?php echo htmlspecialchars($familie['achternaam']); ?></h3>
                    <h3>Adres: <?php echo htmlspecialchars($familie['adres']); ?></h3>

                    <!-- delete familie dmv een form met hidden input -->

                    <form action="familie-details.php" method="POST">
                        <input type="hidden" name="id_delete" value="<?php echo $familie['id'] ?>">
                        <input type="submit" name="delete" value="Delete familie" class="delete-familie-button">
                    </form>
                <?php else :  ?>
                    <h2>Familie bestaat niet!</h2>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>

<?php include('components/footer.php') ?>


</html>

<style>
    .card-center {
        display: flex;
        height: 100%;
        align-items: center;
    }

    .card-details {
        width: 100%;
        max-width: 500px;
        height: 500px;
        border: 1px solid #fff;
        margin: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* justify-content: center; */
        border-radius: 8px;
        background-color: #1d1d1d;
        position: relative;
        padding-top: 200px;
    }

    .card-details h1 {
        position: absolute;
        top: 30px;
        left: 50%;
        transform: translateX(-50%);
        margin: 0 0 20px 0;
        color: coral;
    }

    .card-details h3 {
        margin: 0px 0 10px 0;
    }

    main .card-details button {
        margin-top: 50px;
        background-color: coral;
    }

    .delete-familie-button {
        background-color: coral;
        border: none;
        color: white;
        padding: 15px 50px;
        border-radius: 8px;
        margin-top: 20px;
        font-size: 18px;
        cursor: pointer;
    }
</style>