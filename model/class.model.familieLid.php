<?php
include('config/class.db.php');

class FamilieLidModel extends Dbh
{
   
    protected function setFamilieLid()
    {
        if (isset($_POST['naam']) && ($_POST['geboorteDatum']) && ($_POST['lid_id'])) {
            $naam = $_POST['naam'];
            $geboorteDatum = $_POST['geboorteDatum'];
            $lid_id = $_POST['lid_id'];
            $sql = 'INSERT INTO familieleden(naam, geboorteDatum, lid_id) VALUES(:naam, :geboorteDatum, :lid_id); 
        
                    -- ******functie leeftijd******
                    UPDATE familieleden SET leeftijd = TIMESTAMPDIFF(YEAR, geboorteDatum, CURDATE());
    
                    -- ******mutatie voor soort lid******
                    UPDATE familieleden SET soort_id = CASE 
                    WHEN leeftijd>=51 THEN \'5\' 
                    WHEN leeftijd>=18 THEN \'4\' 
                    WHEN leeftijd >=13 THEN \'3\' 
                    WHEN leeftijd >=7 THEN \'2\' 
                    ELSE \'1\' END ORDER BY id DESC LIMIT 1;
        
                    -- ******mutaties voor contributie****** 
                    UPDATE familieleden SET contributie_id = soort_id;

                      -- ******Set Boekjaar****** 
                    UPDATE familieleden SET boekjaar_id = 1;

                    -- ******Update boekjaar****** 
                    UPDATE boekjaar SET boekjaar = YEAR(CURRENT_DATE()) WHERE id = 1;
                    ';
            $statement = $this->connect()->prepare($sql);
            if ($statement->execute([':naam' => $naam, ':geboorteDatum' => $geboorteDatum, ':lid_id' => $lid_id])) {
                header("location: index.php");
            }
        }
    }
}

