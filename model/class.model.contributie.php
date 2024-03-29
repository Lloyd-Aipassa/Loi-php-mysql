<?php
include('config/class.db.php');

class ContributieModel extends Dbh
{
    protected function getContributie()
    {
        $sql = "SELECT a.naam, a.leeftijd, a.id, b.bedrag FROM familieleden AS a LEFT JOIN contributie AS b ON a.contributie_id = b.id;";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $soortleden = $statement->fetchAll();
        return $soortleden;
    }
}

