<?php
include 'connect.php';

function get_all_items($pdo, $table_name) {
    $query = "SELECT * FROM ".$table_name;

    $get_all_items = $pdo->query($query);
    $results = array();

    while($row = $get_all_items->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }

    return $results;
}


function send_mail($name, $email, $message) {
    $success=mail ("jiatkinson@xcelco.on.ca",$name." has submitted a message", $message);
    if($success) {
        return "success";
        
    } else {
        return "failure";
    }
}

?>