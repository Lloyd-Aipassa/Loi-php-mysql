<?php
include('config/class.db.php');

class LoginModel extends Dbh
{
    protected function getUser()
    {

        $gebruikers_naam = (trim($_POST["gebruikers_naam"]));
        $wachtwoord = (trim($_POST["wachtwoord"]));
        $sql = "SELECT * FROM gebruiker WHERE :gebruikers_naam = gebruikers_naam AND :wachtwoord = wachtwoord";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([':gebruikers_naam' => $gebruikers_naam, ':wachtwoord' => $wachtwoord]);
        $controleer = $statement->fetch();
        if ($controleer > 0) {
            $_SESSION["loggedIn"] = $gebruikers_naam;
            header("location:index.php");
        }
    }
}
