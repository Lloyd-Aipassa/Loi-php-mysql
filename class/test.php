<?php
include('class/class.db.php');

class Test extends Dbh
{
    // public function getFamilies()
    // {
    //     $sql = 'SELECT * FROM families';
    //     $statement = $this->connect()->prepare($sql);
    //     $statement->execute();
    //     $families = $statement->fetchAll();
    //     return $families;
    // }

    // public function setFamilies()
    // {
    //     if (isset($_POST['achternaam']) && ($_POST['adres'])) {
    //         $achternaam = $_POST['achternaam'];
    //         $adres = $_POST['adres'];
    //         $sql = 'INSERT INTO families(achternaam, adres) VALUES(:achternaam, :adres)';
    //         $statement = $this->connect()->prepare($sql);
    //         if ($statement->execute([':achternaam' => $achternaam, ':adres'  => $adres])) {
    //             header("location: index.php");
    //         }
    //     }
    // }



    // public function setFamilieLid()
    // {
    //     if (isset($_POST['naam']) && ($_POST['geboorteDatum']) && ($_POST['lid_id'])) {
    //         $naam = $_POST['naam'];
    //         $geboorteDatum = $_POST['geboorteDatum'];
    //         $lid_id = $_POST['lid_id'];
    //         $sql = 'INSERT INTO familieleden(naam, geboorteDatum, lid_id) VALUES(:naam, :geboorteDatum, :lid_id); 
        
    //                 -- ******functie leeftijd******
    //                 UPDATE familieleden SET leeftijd = TIMESTAMPDIFF(YEAR, geboorteDatum, CURDATE());
    
    //                 -- ******mutatie voor soort lid******
    //                 UPDATE familieleden SET soort_id = CASE 
    //                 WHEN leeftijd>=51 THEN \'5\' 
    //                 WHEN leeftijd>=18 THEN \'4\' 
    //                 WHEN leeftijd >=13 THEN \'3\' 
    //                 WHEN leeftijd >=7 THEN \'2\' 
    //                 ELSE \'1\' END ORDER BY id DESC LIMIT 1;
        
    //                 -- ******mutaties voor contributie****** 
    //                 UPDATE familieleden SET contributie_id = soort_id;
    //                 UPDATE familieleden SET betaald = contributie_id;
    //                 ';
    //         $statement = $this->connect()->prepare($sql);
    //         if ($statement->execute([':naam' => $naam, ':geboorteDatum' => $geboorteDatum, ':lid_id' => $lid_id])) {
    //             header("location: index.php");
    //         }
    //     }
    // }

    // public function getBoekjaar()
    // {

    //     $sql = "SELECT 
    //     families.id,
    //     families.achternaam,
    //     families.adres,
    //     contributie.bedrag,
    //     SUM(bedrag) totaal

    //     FROM familieleden
    //     INNER JOIN contributie ON(familieleden.contributie_id = contributie.id)
    //     INNER JOIN families ON(familieleden.lid_id = families.id)
    //     group by Achternaam";

    //     $statement = $this->connect()->prepare($sql);
    //     $statement->execute();
    //     $contributieTotalen = $statement->fetchAll();
    //     return $contributieTotalen;
    // }




    // public function getContributie()
    // {
    //     $sql = "SELECT a.naam, a.leeftijd, a.id, b.bedrag FROM familieleden AS a LEFT JOIN contributie AS b ON a.contributie_id = b.id;";
    //     $statement = $this->connect()->prepare($sql);
    //     $statement->execute();
    //     $soortleden = $statement->fetchAll();
    //     return $soortleden;
    // }




    // public function deleteFamilieLid()
    // {
    //     $id = $_GET['id'];
    //     $sql = 'DELETE FROM familieleden Where id=:id';
    //     $statement = $this->connect()->prepare($sql);
    //     if ($statement->execute([':id' => $id])); {
    //         header("location: index.php");
    //     }
    // }



    // public function deleteFamilie()
    // {
    //     $id = $_GET['id'];
    //     $sql = 'DELETE FROM families Where id=:id';
    //     $statement = $this->connect()->prepare($sql);
    //     if ($statement->execute([':id' => $id])); {
    //         header("location: index.php");
    //     }
    // }

    //  ************samen****************
    // public function getFamilieLid()
    // {
    //     //Pak ID uit superglobal met GET method
    //     $id = $_GET['id'];

    //     $sql = 'SELECT * FROM familieleden Where id=:id';
    //     $statement = $this->connect()->prepare($sql);
    //     $statement->execute([':id' => $id]);
    //     $familielid = $statement->fetch(PDO::FETCH_OBJ);
    //     return $familielid;
    // }

    // public function editFamilieLid()
    // {
    //     //Pak ID uit superglobal met GET method
    //     $id = $_GET['id'];
    //     if (isset($_POST['naam']) && ($_POST['geboorteDatum'])) {
    //         $naam = $_POST['naam'];
    //         $geboorteDatum = $_POST['geboorteDatum'];
    //         $sql = 'UPDATE familieleden SET naam=:naam, geboorteDatum=:geboorteDatum WHERE id=:id;
                
    //             -- ******functie leeftijd******
    //             UPDATE familieleden SET leeftijd = TIMESTAMPDIFF(YEAR, geboorteDatum, CURDATE()) WHERE id=:id;
            
    //             -- ******mutatie voor soort lid******
    //             UPDATE familieleden SET soort_id = CASE
    //             WHEN leeftijd>=51 THEN \'5\'
    //             WHEN leeftijd>=18 THEN \'4\'
    //             WHEN leeftijd >=13 THEN \'3\'
    //             WHEN leeftijd >=7 THEN \'2\'
    //             ELSE \'1\' END WHERE id=:id;
            
    //             -- ******mutatie voor contributie******
    //             UPDATE familieleden SET contributie_id = soort_id WHERE id=:id;
    //             UPDATE familieleden SET betaald = contributie_id WHERE id=:id;';

    //         $statement = $this->connect()->prepare($sql);
    //         if ($statement->execute([':naam' => $naam, ':geboorteDatum' => $geboorteDatum, ':id' => $id])) {
    //             header("location: index.php");
    //         }
    //     }
    // }
    // ***********EIND samen****************


    //  ************samen****************
    // public function getFam()
    // {
    //     //Pak ID uit superglobal met GET method
    //     $id = $_GET['id'];

    //     $sql = 'SELECT * FROM families Where id=:id';
    //     $statement = $this->connect()->prepare($sql);
    //     $statement->execute([':id' => $id]);
    //     $familie = $statement->fetch(PDO::FETCH_OBJ);
    //     return $familie;
    // }



    // public function editFam()
    // {
    //     //Pak ID uit superglobal met GET method
    //     $id = $_GET['id'];
    //     if (isset($_POST['achternaam']) && ($_POST['adres'])) {
    //         $achternaam = $_POST['achternaam'];
    //         $adres = $_POST['adres'];
    //         $sql = 'UPDATE families SET achternaam=:achternaam, adres=:adres WHERE id=:id';
    //         $statement = $this->connect()->prepare($sql);
    //         if ($statement->execute([':achternaam' => $achternaam, ':adres'  => $adres, ':id' => $id])) {
    //             header("location: index.php");
    //         }
    //     }
    // }
    // ***********EIND samen****************

    // public function getSoortLeden()
    // {
    //     $sql = "SELECT a.naam, a.leeftijd, a.id, b.soort_lid FROM familieleden AS a LEFT JOIN soortleden AS b ON a.soort_id = b.id;";
    //     $statement = $this->connect()->prepare($sql);
    //     $statement->execute();
    //     $soortleden = $statement->fetchAll();
    //     // print_r($soortleden);
    //     return $soortleden;
    // }

    //******************famie 2 functies **************************
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

