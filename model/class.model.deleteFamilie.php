<?php
include('config/class.db.php');

class DeleteFamilieModel extends Dbh
{
    protected function deleteFamilie()
    {
        $id = $_GET['id'];
        $sql = 'DELETE FROM families Where id=:id';
        $statement = $this->connect()->prepare($sql);
        if ($statement->execute([':id' => $id])); {
            header("location: index.php");
        }
    }
}

