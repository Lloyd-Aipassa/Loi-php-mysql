<?php
include('config/class.db.php');

class BoekjaarModel extends Dbh
{
    protected function getBoekjaar()
    {
        $sql = "SELECT 
        families.id,
        families.achternaam,
        families.adres,
        boekjaar.boekjaar,
        contributie.bedrag,
        SUM(bedrag) totaal

        FROM familieleden
        INNER JOIN contributie ON(familieleden.contributie_id = contributie.id)
        INNER JOIN families ON(familieleden.lid_id = families.id)
        INNER JOIN boekjaar ON(familieleden.boekjaar_id = boekjaar.id)
        group by Achternaam";

        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $contributieTotalen = $statement->fetchAll();
        return $contributieTotalen;
    }
}

