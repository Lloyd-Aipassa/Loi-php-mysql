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
            // Ik kom er niet uit hoe ik na het submitten van het formullier de pagina kan refreshen, dus heb ik het zo maar opgelost... :)
            header("location.reload(true)");
            echo '<script type="text/javascript">window.history.back();</script>';
        }
    }
}

