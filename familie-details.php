<?php
$pageTitle = 'Familie-details';

include('config/db.php');

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

    print_r($familie);
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
        test
    </main>
</div>

<?php include('components/footer.php') ?>


</html>