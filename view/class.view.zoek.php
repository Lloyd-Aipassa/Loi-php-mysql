<?php
include('model/class.model.zoek.php');

class ZoekResultaat extends ZoekModel
{
    public function ShowZoekResultaat()
    {
        $controleer = $this->searchFamilie();
        return $controleer;
    }
}