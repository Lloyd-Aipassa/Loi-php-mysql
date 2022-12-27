<?php
include('model/class.model.login.php');

class LoginView extends LoginModel
{
    public function loggedin()
    {
        $controleer = $this->getUser();
        return $controleer;
    }
}