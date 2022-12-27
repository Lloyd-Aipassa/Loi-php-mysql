<?php
include('class/class.db.php');

class DeleteFamilieModel extends Dbh
{
    public function deleteFamilie()
    {
        $id = $_GET['id'];
        $sql = 'DELETE FROM families Where id=:id';
        $statement = $this->connect()->prepare($sql);
        if ($statement->execute([':id' => $id])); {
            header("location: index.php");
        }
    }
}

