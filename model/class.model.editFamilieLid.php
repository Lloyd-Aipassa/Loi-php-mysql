<?php
include('class/class.db.php');

class editFamilieLidModel extends Dbh
{
    protected function getEditFamilieLid()
    {
        //Pak ID uit superglobal met GET method
        $id = $_GET['id'];

        $sql = 'SELECT * FROM familieleden Where id=:id';
        $statement = $this->connect()->prepare($sql);
        $statement->execute([':id' => $id]);
        $familielid = $statement->fetch(PDO::FETCH_OBJ);
        return $familielid;
    }

    protected function setEditFamilieLid()
    {
        //Pak ID uit superglobal met GET method
        $id = $_GET['id'];
        if (isset($_POST['naam']) && ($_POST['geboorteDatum'])) {
            $naam = $_POST['naam'];
            $geboorteDatum = $_POST['geboorteDatum'];
            $sql = 'UPDATE familieleden SET naam=:naam, geboorteDatum=:geboorteDatum WHERE id=:id;
                
                -- ******functie leeftijd******
                UPDATE familieleden SET leeftijd = TIMESTAMPDIFF(YEAR, geboorteDatum, CURDATE()) WHERE id=:id;
            
                -- ******mutatie voor soort lid******
                UPDATE familieleden SET soort_id = CASE
                WHEN leeftijd>=51 THEN \'5\'
                WHEN leeftijd>=18 THEN \'4\'
                WHEN leeftijd >=13 THEN \'3\'
                WHEN leeftijd >=7 THEN \'2\'
                ELSE \'1\' END WHERE id=:id;
            
                -- ******mutatie voor contributie******
                UPDATE familieleden SET contributie_id = soort_id WHERE id=:id;
                UPDATE familieleden SET betaald = contributie_id WHERE id=:id;';

            $statement = $this->connect()->prepare($sql);
            if ($statement->execute([':naam' => $naam, ':geboorteDatum' => $geboorteDatum, ':id' => $id])) {
                header("location: index.php");
            }
        }
    }
}

