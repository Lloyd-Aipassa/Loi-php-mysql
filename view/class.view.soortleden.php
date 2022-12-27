<?php
include('model/class.model.soortleden.php');

class SoortLedenView extends SoortLedenModel
{
    public function showSoortLeden()
    {
        $families = $this->getSoortLeden();
        return $families;
    }
}