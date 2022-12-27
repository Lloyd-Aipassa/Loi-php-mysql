<?php
include('config/class.db.php');

class editFamilieModel extends Dbh
{
    public function getFam()
    {
        //Pak ID uit superglobal met GET method
        $id = $_GET['id'];

        $sql = 'SELECT * FROM families Where id=:id';
        $statement = $this->connect()->prepare($sql);
        $statement->execute([':id' => $id]);
        $familie = $statement->fetch(PDO::FETCH_OBJ);
        return $familie;
    }

    public function setFam()
    {
        //Pak ID uit superglobal met GET method
        $id = $_GET['id'];
        if (isset($_POST['achternaam']) && ($_POST['adres'])) {
            $achternaam = $_POST['achternaam'];
            $adres = $_POST['adres'];
            $sql = 'UPDATE families SET achternaam=:achternaam, adres=:adres WHERE id=:id';
            $statement = $this->connect()->prepare($sql);
            if ($statement->execute([':achternaam' => $achternaam, ':adres'  => $adres, ':id' => $id])) {
                header("location: index.php");
            }
        }
    }
}

