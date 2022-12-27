<?php
include('model/class.model.families.php');

class FamiliesView extends FamiliesModel
{
    public function ShowFamilies()
    {
        $families = $this->getFamilies();
        return $families;
    }
}