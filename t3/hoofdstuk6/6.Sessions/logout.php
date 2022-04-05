<?php
session_start();
$_SESSION["loginState"] = false;
session_destroy();
header("location: oefeningSessions.php");