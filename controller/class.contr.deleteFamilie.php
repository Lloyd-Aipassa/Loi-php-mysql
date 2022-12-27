<?php
include('model/class.model.deleteFamilie.php');

class DeleteFamilieContr extends DeleteFamilieModel
{
    public function removeFamilie()
    {
        $families = $this->deleteFamilie();
        return $families;
    }
}