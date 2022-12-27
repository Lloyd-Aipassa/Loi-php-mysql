<?php
include('model/class.model.editFamilieLid.php');

class editFamilieLidView extends editFamilieLidModel
{
    public function showEditFamilieLid()
    {
        $families = $this->getEditFamilieLid();
        return $families;
    }
}