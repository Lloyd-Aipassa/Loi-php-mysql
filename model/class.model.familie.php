<?php
include('config/class.db.php');

class FamilieModel extends Dbh
{
    protected function getFamilie()
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
        contributie.bedrag,
        soortleden.soort_lid
        FROM familieleden
        left JOIN families ON(families.id = familieleden.lid_id)
        left JOIN contributie ON(familieleden.contributie_id = contributie.id)
        left JOIN soortleden ON(familieleden.soort_id = soortleden.id)
        Where lid_id=:id;";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([':id' => $id2]);
        $families = $statement->fetchAll();
        return $families;
    }

    protected function getContibutieTotaal()
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

