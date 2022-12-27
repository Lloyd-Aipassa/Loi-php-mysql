<?php
include('model/class.model.editFamilie.php');

class editFamilieContr extends editFamilieModel
{
    public function updateFam()
    {
        $updateFamilies = $this->setFam();
        return $updateFamilies;
    }

    public function showFam()
    {
        $families = $this->getFam();
        return $families;
    }
}