<!--Noah Beij
    29/03/2022
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="oefeningSessions-resultaat.php" method="post"><br>
        <input type="text" name="naam" placeholder="Volledige naam"><br>
        <input type="text" name="gebruikersnaam" placeholder="Gebruikers naam"><br>
        <input type="email" name="email" placeholder="E-mail"><br>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord"><br>
        <input type="submit" value="Log in!">
    </form>
    <?php
        if(isset($_GET["error"])){
                echo $_GET["error"]." is fout";
        }
    ?>
</body>
</html>