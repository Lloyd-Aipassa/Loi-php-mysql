<?php
$pageTitle = 'Login';
session_start();
if (isset($_SESSION["loggedIn"])) {
    header("location:home.php");
}

include('view/class.view.login.php');
$loginObj = new Loginview();

$veldLeeg = $veldOnjuist = "";
if (isset($_POST["submit"])) {
    if ($_POST["gebruikers_naam"] === "" or ["wachtwoord"] === "") {
        $veldLeeg = "Vul alle velden in...";
    } else {
        $loginObj->loggedin();
        $veldOnjuist = "Je gebruikersnaam of wachtwoord is incorrect...";
    }
}

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <title><?php $pageTitle ?></title>
</head>

<div class="grid-container">

    <main class="main2">
        <section class="card-form">

            <form method="POST">
                <label>
                    <p>Gebruikersnaam</p>
                </label>
                <input type="text" name="gebruikers_naam" value="">
                <label>
                    <p>Wachtwoord</p>
                </label>
                <input type="text" name="wachtwoord" value=''>
                <button type="submit" name="submit">Log in</button>
            </form>
            <H2><?php echo $veldLeeg; ?></H2>
            <H2><?php echo $veldOnjuist; ?></H2>
        </section>
    </main>
</div>




</html>



