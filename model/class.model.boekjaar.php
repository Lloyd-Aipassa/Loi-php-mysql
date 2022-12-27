<?php
include('class/class.db.php');

class BoekjaarModel extends Dbh
{
    public function getBoekjaar()
    {
        $sql = "SELECT 
        families.id,
        families.achternaam,
        families.adres,
        contributie.bedrag,
        SUM(bedrag) totaal

        FROM familieleden
        INNER JOIN contributie ON(familieleden.contributie_id = contributie.id)
        INNER JOIN families ON(familieleden.lid_id = families.id)
        group by Achternaam";

        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $contributieTotalen = $statement->fetchAll();
        return $contributieTotalen;
    }
}

