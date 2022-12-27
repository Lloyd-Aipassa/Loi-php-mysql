<?php
include('model/class.model.editFamilieLid.php');

class editFamilieLidContr extends editFamilieLidModel
{
    public function updateFamilieLid()
    {
        $updateFamilies = $this->setEditFamilieLid();
        return $updateFamilies;
    }

    public function showEditFamilieLid()
    {
        $families = $this->getEditFamilieLid();
        return $families;
    }
}