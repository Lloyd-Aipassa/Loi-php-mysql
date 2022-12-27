<?php
include('model/class.model.deleteFamilieLid.php');

class DeleteFamilieLidContr extends DeleteFamilieLidModel
{
    public function removeFamilieLid()
    {
        $families = $this->deleteFamilieLid();
        return $families;
    }
}
