<?php
$pageTitle = 'Add familie';
?>

<?php

include('config/db.php');

$achternaam = $adres =  '';
$errors = array('achternaam' => '', 'adres' => '');

if (isset($_POST['submit'])) {

    if (empty($_POST['achternaam'])) {
        $errors['achternaam'] = "achternaam verplicht in te vullen <br />";
    } else {
        echo $_POST['achternaam'];
    }

    if (empty($_POST['adres'])) {
        $errors['adres'] = "Adres verplicht in te vullen <br />";
    } else {
        echo $_POST['adres'];
    }
    if(array_filter($errors)){
        echo "form niet compleet";
    } else{

        $achternaam = mysqli_real_escape_string($conn, $_POST['achternaam'] );
        $adres = mysqli_real_escape_string($conn, $_POST['adres'] );

        //sql add to database (toevoegen aan db) let op double quote!!
        $sql = "INSERT INTO families (achternaam, adres) VALUES('$achternaam', '$adres')";

        //Opslaan in database
        if(mysqli_query($conn, $sql)){
            header('location: index.php');
         } else{
                echo 'je hebt een query error:' . mysqli_error($conn);
            }
        }  
} // einde POST check

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
            <H2>Voeg een familie toe</H2>
            <form action="add-familie.php" method="POST">

                <label>achternaam</label>
                <p> <?php echo $errors['achternaam'] ?> </p>
                <input type="text" name="achternaam" value="<?php echo htmlspecialchars($achternaam)  ?>">

                <label>Adres</label>
                <p> <?php echo $errors['adres'] ?> </p>
                <input type="text" name="adres" value="<?php echo htmlspecialchars($adres)  ?>">



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