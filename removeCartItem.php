<?php

require 'database/dbConnect.php';
session_start();

$itemid = $db->escape_string($_REQUEST['itemid']);
$userid = $_SESSION['userID'];
$size = $db->escape_string($_REQUEST['size']);
$location = $_REQUEST['pagelocation'];

$sql_removecart = $db->prepare("DELETE FROM cart WHERE itemID=? AND size=? AND user=?");
$sql_removecart->bind_param('isi', $itemid,$size, $userid);
$sql_removecart->execute();
$sql_removecart->close();   

if ($sql_removecart) {
    $_SESSION['message'] = 'Successfully removed product from cart';
    header("location: $location.php?success=1");
} else {
$_SESSION['message'] = 'Something went wrong! Please try again.';
    header("location: $location.php?error=1");
}