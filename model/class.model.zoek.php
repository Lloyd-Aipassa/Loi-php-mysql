<?php
include('config/class.db.php');

class ZoekModel extends Dbh
{
    protected function searchFamilie()
    {
        if (isset($_POST["submit"])) {
            if ($_POST["zoek"] === "") {
                echo "<h2>Zoekveld is nog leeg...</h2>";
            } else {
                $zoek = (trim($_POST["zoek"]));
                $sql = "SELECT * FROM families WHERE achternaam LIKE '%$zoek%' OR adres LIKE '%$zoek%'";
                $statement = $this->connect()->prepare($sql);
                $statement->execute();
                $controleer = $statement->fetchAll();
                $count = $statement->rowCount();
                if ($count > 0) { ?>
                    <h2><?php $veldLeeg = "Niets gevonden"; ?></h2>
                    <table>
                        <tr>
                            <caption>Zoekresultaten</caption>
                            <th>Achternaam</th>
                            <th>Adres</th>
                        </tr>
                        <?php
                        foreach ($controleer as $resultaat) { ?>
                            <tr>
                                <td data-cell="Achternaam">
                                    <p><a class="link-achternaam" href="familie.php?id=<?= $resultaat->id ?>"> <?= $resultaat->achternaam; ?></a></p>
                                </td>
                                <td data-cell="Straat">
                                    <p><?php echo $resultaat->adres; ?> </p>
                                </td>
                            </tr>

                        <?php } ?>
                    </table>
<?php
                } else {
                    echo "<h2>Geen familie gevonden...</h2>";
                }
            }
        }
    }
}
