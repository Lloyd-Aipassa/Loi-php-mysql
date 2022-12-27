<?php
include('model/class.model.familieLid.php');

class FamilieLidContr extends FamilieLidModel
{
    public function CreateFamilieLid()
    {
        $families = $this->setFamilieLid();
        return $families;
    }
}