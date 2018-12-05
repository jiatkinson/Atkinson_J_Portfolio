<?php

include 'includes/functions.php';

$client_data = get_all_items("portfolio_clients");
foreach ($client_data as $client) {
echo '<li><a href="'. $client["clients_url"] .'">'. $client["clients_name"].'</a></li>';
}

?>