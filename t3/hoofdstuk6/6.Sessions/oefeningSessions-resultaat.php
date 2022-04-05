<!--Noah Beij
    29/03/2022
-->

<?php
 $naam = $_POST["naam"];
 $gebruikersnaam = $_POST["gebruikersnaam"];
 $email = $_POST["email"];
 $wachtwoord = $_POST["wachtwoord"];



 if ($email == "n.beij@kw1c.nl"){
     if ($wachtwoord == "phpiscool"){
         session_start();
         $_SESSION["naam"] = $naam;
         $_SESSION["gebruikersnaam"] = $gebruikersnaam;
         $_SESSION["email"] = $email;
         $_SESSION["loginState"] = true;
         header("location: dashboard.php");
     }
     else {
         header("location: oefeningSessions.php?error=Wachtwoord");
     }

 } else {
     header("location: oefeningSessions.php?error=Gebruikersnaam");
 }