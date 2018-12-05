<?php

    // $user = "root";
    // $pw = "root";

    $user = "Fanshawe_test1";
    $pw = "password";

    try {
        $conn = new PDO('mysql:host=localhost;dbname=jacob_atkinson_portfolio', $user, $pw);
        //var_dump($conn);
    } catch(PDOException $exception) {
        echo 'connect error!' . $exception->getMessage();
    }

?>