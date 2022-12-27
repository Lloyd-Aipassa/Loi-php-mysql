<?php
include('model/class.model.familie.php');

class FamilieView extends FamilieModel
{
    public function showContibutieTotaal()
    {
        $updateFamilies = $this->getContibutieTotaal();
        return $updateFamilies;
    }

    public function showFamilie()
    {
        $familie = $this->getFamilie();
        return $familie;
    }
}