<?php
session_start();
if (isset($_SESSION["loginState"]) && $_SESSION["loginState"] == true) {
    $naam = $_SESSION["naam"];
    $gebruikersnaam = $_SESSION["gebruikersnaam"];
    $email = $_SESSION["email"];

    echo "
        Naam: ".$naam."<br>
        Gebruikersnaam: ".$gebruikersnaam."<br>
        E-mail: ".$email."<br>
        <a href='dashboard.php'>Ga Terug</a>
        ";

} else {
    header("location: oefeningSessions.php?error=Geen%20toegang");
}
