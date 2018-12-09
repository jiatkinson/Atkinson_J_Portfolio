<?php

include 'functions.php';

$name = isset($_GET['name']) ? $_GET['name'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$message = isset($_GET['message']) ? $_GET['message'] : '';
echo $name;
echo $email;
echo $message;
echo send_mail($name, $email, $message);

?>