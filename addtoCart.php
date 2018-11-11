<?php

session_start();
require 'database/dbConnect.php';

if (isset($_SESSION['userID'])) {

    $itemid = $db->escape_string($_POST['itemid']);
    $userid = $db->escape_string($_POST['userid']);
    $location = $_POST['pagelocation'];
    $quantity = $db->escape_string($_POST['itemqty']);
    $cost = $db->escape_string($_POST['itemcost']);
    $itemquantity=1;

    $sql_viewitem = $db->query("SELECT * FROM cart WHERE itemID='$itemid' AND user='$userid'") or die($db->error());
    
    if ($sql_viewitem->num_rows == 0) {
        $sql_addcart = $db->prepare("INSERT INTO cart(itemID, quantity, cost, user) VALUES (?,?,?,?)");
        $sql_addcart->bind_param('iiii', $itemid, $quantity, $cost, $userid);
        $sql_addcart->execute();
        
        if ($sql_addcart) {
            $_SESSION['message'] = 'Product added to cart';
            header("location: $location.php?success=1");
        } else {
            $_SESSION['message'] = 'Something went wrong! Please add the selected item again.';
            header("location: $location.php?error=1");
        }
        $sql_addcart->close();
    }
    else{
        $sql_updatecart = $db->prepare("UPDATE cart SET quantity=quantity+? WHERE itemID=? AND user=?");
        $sql_updatecart->bind_param('iii', $itemquantity, $itemid, $userid);
        $sql_updatecart->execute();
        $sql_updatecart->close();
        $_SESSION['message'] = 'Product added to cart';
            header("location: $location.php?success=1");
    }
} else {
    header("location: account.php");
}


