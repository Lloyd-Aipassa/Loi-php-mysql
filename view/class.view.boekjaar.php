<?php
include('model/class.model.boekjaar.php');

class BoekjaarView extends BoekjaarModel
{
    public function ShowBoekjaar()
    {
        $families = $this->getBoekjaar();
        return $families;
    }
}