<?php

require 'database/dbConnect.php';
session_start();

$itemid = $_POST['item_id'];
//All mandatory fields to be added
$itemname = $_POST['item_name'];
$itemunits = $_POST['item_units'];
$itemudiscount = $_POST['item_discount'];
$itemprice = $_POST['item_price'];
$itemdescr = $_POST['textarea'];


$result = $db->query("SELECT * FROM items WHERE itemID='$itemid'") or die($db->error());

if ($result->num_rows > 0) { //results True
    $sql1 = "UPDATE items set itemName=?, itemDescription=? , itemPrice=?, itemUnits=?, itemDiscount=? WHERE itemID=?";
    $result1 = $db->prepare($sql1);
    $result1->bind_param('ssiiii', $itemname, $itemdescr, $itemprice, $itemunits, $itemudiscount, $itemid);
    $result1->execute();
    if ($result1->errno) {
        $_SESSION['message'] = 'Something went wrong while updating. Try again!';
        header("location: error.php");
    } else
        $result1->close();
        $_SESSION['message'] = 'Update successful for item ID:' . $itemid;
        header("location: success.php");
} else {
    $_SESSION['message'] = 'No such product exists!';
    header("location: error.php");
}