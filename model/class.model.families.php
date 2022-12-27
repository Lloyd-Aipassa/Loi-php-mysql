<?php
include('config/class.db.php');

class FamiliesModel extends Dbh
{
    protected function getFamilies()
    {
        $sql = 'SELECT * FROM families';
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $families = $statement->fetchAll();
        return $families;
    }

    protected function setFamilies()
    {
        if (isset($_POST['achternaam']) && ($_POST['adres'])) {
            $achternaam = $_POST['achternaam'];
            $adres = $_POST['adres'];
            $sql = 'INSERT INTO families(achternaam, adres) VALUES(:achternaam, :adres)';
            $statement = $this->connect()->prepare($sql);
            if ($statement->execute([':achternaam' => $achternaam, ':adres'  => $adres])) {
                header("location: index.php");
            }
        }
    }
}

