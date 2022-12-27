<?php
include('config/class.db.php');

class FamilieModel extends Dbh
{
    public function getFamilie()
    {
        $id2 = $_GET['id'];
        $sql = "SELECT 
        families.achternaam,
        families.adres,
        familieleden.id,
        familieleden.naam,
        familieleden.geboorteDatum,
        familieleden.lid_id,
        familieleden.leeftijd,
        familieleden.soort_lid,
        contributie.bedrag
        FROM familieleden
        left JOIN families ON(families.id = familieleden.lid_id)
        left JOIN contributie ON(familieleden.contributie_id = contributie.id)
        Where lid_id=:id;";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([':id' => $id2]);
        $families = $statement->fetchAll();
        return $families;
    }

    public function getContibutieTotaal()
    {
        // ********** query id van individuele familie ***********
        $id2 = $_GET['id'];
        $sql = "SELECT 
        contributie.bedrag,
        SUM(bedrag) totaal

        FROM familieleden
        INNER JOIN contributie ON(familieleden.contributie_id = contributie.id)
        Where lid_id=:id;";

        $statement = $this->connect()->prepare($sql);   
        $statement->execute([':id' => $id2]);
        $contributieTotalen = $statement->fetchAll();
        return $contributieTotalen;
    }
}

