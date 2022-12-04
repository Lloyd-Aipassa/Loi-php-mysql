<main class="main">
    <div class="center">
        <div class="row">
            <button><a href="add-familie.php">Toevoegen</a></button>
            <?php foreach ($families as $familie) { ?>
                <div class="col">
                    <div class="content">
                        <p> Achternaam: <?php echo htmlspecialchars($familie['achternaam']); ?></p>
                        <p> Adres: <?php echo htmlspecialchars($familie['adres']); ?></p>
                        <hr class="solid">
                    </div>
                    <button class="deteils-fam"><a href="familie-details.php?id=<?php echo $familie['id']; ?>">details</a></button>

                </div>
            <?php } ?>
        </div>
    </div>
    <!--************* zoeken************ -->
    <!-- <div class="search">
            <form action="index.php" method="POST" name="search_form">
                <input type="text" name="search_box">
                <input type="submit" name="search" value="zoeken">
            </form> -->
    </div>
</main>