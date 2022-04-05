<?php
session_start();
if(isset($_SESSION["loginState"]) && $_SESSION["loginState"] == true){
    $gebruikersnaam = $_SESSION["gebruikersnaam"];
    echo "<h1>Welkom ".$gebruikersnaam."</h1>";
    echo "<p>Dit is mijn coole geheime php site!!!</p>";
    echo "<a href='accountDetails.php'>Account</a><br>";
    echo "<a href='logout.php'>Log Uit</a>";

} else {
    header("location: oefeningSessions.php?error=Geen%20toegang");
}