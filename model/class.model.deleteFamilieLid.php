<?php
include('config/class.db.php');

class DeleteFamilieLidModel extends Dbh
{
    protected function deleteFamilieLid()
    {
        $id = $_GET['id'];
        $sql = 'DELETE FROM familieleden Where id=:id';
        $statement = $this->connect()->prepare($sql);
        if ($statement->execute([':id' => $id])); {
            header("location: index.php");
        }
    }
}

