<?php

    $user = "root";
    $pw = "root";

    // $user = "jiatkinson7";
    // $pw = "jacobatkinsonpassword";

    try {
        $conn = new PDO('mysql:host=localhost;dbname=portfolio', $user, $pw);
        //var_dump($conn);
    } catch(PDOException $exception) {
        echo 'connect error!' . $exception->getMessage();
    }

?>