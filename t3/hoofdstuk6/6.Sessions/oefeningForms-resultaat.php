<!-- module header-->
<?php

    $title = $_POST['title'];
    $bericht = $_POST['message'];
    $amount = $_POST['amount'];
    $terms = isset($_POST['voorwaarden']);

    for($i = 0; $i < $amount; $i = $i + 1){
        echo $title."<br>";
        echo $bericht."<br>";
        echo $terms;
        echo "<hr>";
    }
