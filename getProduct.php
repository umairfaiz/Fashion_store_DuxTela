<?php

require 'database/dbConnect.php';
session_start();

$itemid = $db->escape_string($_REQUEST['itemid']);
$location = $_REQUEST['pagelocation'];

$result = $db->query("SELECT * FROM items where itemID = '$itemid'") or die($db->error());

if ($result->num_rows ==0) {
    $_SESSION['message'] = 'The selected item is not in Stock. Sorry for the inconvenience';
    header("location: $location.php?error=1");
}
 else {
    header("location: product-detail.php?itemid=$itemid");
}
                            