<?php
session_start();
require 'database/dbConnect.php';


$itemid = $db->escape_string($_REQUEST['itemid']);
$itemquantity = $db->escape_string($_REQUEST['itemquantity']);
$size = $db->escape_string($_REQUEST['size']);
$userid = $_SESSION['userID'];
$location = $_REQUEST['pagelocation'];

$sql_updatecart = $db->prepare("UPDATE cart SET quantity=? WHERE itemID=? AND size=? AND user=?");
$sql_updatecart->bind_param('iisi',$itemquantity, $itemid, $size, $userid);
$sql_updatecart->execute();
$sql_updatecart->close();

if ($sql_updatecart) {
    $_SESSION['message'] ='Cart updated successfully!';
    header("location: $location.php?success=1");
} else {
    $_SESSION['message'] ='Something went wrong, please try again!';
    header("location: $location.php?error=1");
}