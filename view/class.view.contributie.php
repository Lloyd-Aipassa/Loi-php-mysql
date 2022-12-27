<?php
include('model/class.model.contributie.php');

class ContributieView extends ContributieModel
{
    public function showContributie()
    {
        $families = $this->getContributie();
        return $families;
    }
}