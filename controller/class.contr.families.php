<?php
include('model/class.model.families.php');

class FamiliesContr extends FamiliesModel
{
    public function CreateFamilies()
    {
        $families = $this->setFamilies();
        return $families;
    }
}