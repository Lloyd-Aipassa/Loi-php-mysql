<?php
include('class/class.db.php');

class SoortLedenModel extends Dbh
{
    public function getSoortLeden()
    {
        $sql = "SELECT a.naam, a.leeftijd, a.id, b.soort_lid FROM familieleden AS a LEFT JOIN soortleden AS b ON a.soort_id = b.id;";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $soortleden = $statement->fetchAll();
        // print_r($soortleden);
        return $soortleden;
    }
}

