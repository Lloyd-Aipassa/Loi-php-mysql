<?php
$pageTitle = 'Contributie';

// include('config/db.php');
// if (isset($_POST['naam']) && ($_POST['geboorteDatum']) && ($_POST['lid_id'])) {
//     $naam = $_POST['naam'];
//     $geboorteDatum = $_POST['geboorteDatum'];
//     $lid_id = $_POST['lid_id'];
//     $sql = 'INSERT INTO familieleden(naam, geboorteDatum, lid_id) VALUES(:naam, :geboorteDatum, :lid_id)';
//     $statement = $conn->prepare($sql);
//     if ($statement->execute([':naam' => $naam, ':geboorteDatum' => $geboorteDatum, ':lid_id' => $lid_id])) {
//         header("location: index.php");
//     }
// }

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
        <?php
        $birthDate = "17-10-1998";
        $currentDate = date("d-m-Y");
        $age = date_diff(date_create($birthDate), date_create($currentDate));
        echo "Current age is " . $age->format("%y");
        ?>

        <section class="card-form">
            <H2>Voeg een familie lid toe</H2>
            <form  method="POST">
                <label>Voornaam</label>
                <input type="text" name="naam" value="">
                <label>Geboortedatum</label>
                <input type="date" name="geboorteDatum" value=''>
                <input type="hidden" name="lid_id" value='<?= $_GET['id']; ?>'>
                <button type="submit" value="submit" name="submit">voeg toe</button>
            </form>
        </section>
    </main>
</div>

<?php include('components/footer.php') ?>


</html>