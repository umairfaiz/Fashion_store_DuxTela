<?php

session_start();
require 'database/dbConnect.php';

if (isset($_SESSION['userID'])) {

    $itemid = $db->escape_string($_POST['itemid']);
    $userid = $db->escape_string($_POST['userid']);
    $location = $_POST['pagelocation'];
    $quantity = $db->escape_string($_POST['itemqty']);
    $cost = $db->escape_string($_POST['itemcost']);
    $size = $db->escape_string($_POST['size']);
    $itemquantity=1;

    $sql_viewitem = $db->query("SELECT * FROM cart WHERE itemID='$itemid' AND size='$size' AND user='$userid'") or die($db->error());
    
    if ($sql_viewitem->num_rows == 0) {
        $sql_addcart = $db->prepare("INSERT INTO cart(itemID, quantity, cost, size, user) VALUES (?,?,?,?,?)");
        $sql_addcart->bind_param('iiisi', $itemid, $quantity, $cost, $size, $userid);
        $sql_addcart->execute();
        
        if ($sql_addcart) {
            $_SESSION['message'] = 'Product added to cart';
//            header("location: $location.php?itemid=$itemid?success=1"); //returns to the same page
            header("location: cart.php");
        } else {
            $_SESSION['message'] = 'Something went wrong! Please add the selected item again.';
            header("location: $location.php?itemid=$itemid?error=1");
        }
        $sql_addcart->close();
    }
    else{
        $sql_updatecart = $db->prepare("UPDATE cart SET quantity=quantity+? WHERE itemID=? AND size=? AND user=?");
        $sql_updatecart->bind_param('iisi', $quantity, $itemid, $size, $userid);
        $sql_updatecart->execute();
        $sql_updatecart->close();
        $_SESSION['message'] = 'Product added to cart';
            header("location: $location.php?itemid=$itemid?success=1");
    }
} else {
    header("location: account.php");
}


