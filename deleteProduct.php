<?php

require 'database/dbConnect.php';
session_start();

$item_id= (int)$_POST['remove_item'];
$itemimg1 = $_POST['item_img1'];
$itemimg2 = $_POST['item_img2'];
$itemimg3 = $_POST['item_img3'];
$itemimg4 = $_POST['item_img4'];
$itemcategory = $_POST['item_cate'];

$result = $db->prepare("delete from items where itemId= ?");
$result->bind_param('i', $item_id);
$result->execute();
$result->close();

$filepath1 = "product_img/$itemcategory/$itemimg1";
$filepath2 = "product_img/$itemcategory/$itemimg2";
$filepath3 = "product_img/$itemcategory/$itemimg3";
$filepath4 = "product_img/$itemcategory/$itemimg4";

if(file_exists($filepath1) && file_exists($filepath2) && file_exists($filepath3)&& file_exists($filepath4)){
    
    unlink($filepath1);
    unlink($filepath2);
    unlink($filepath3);
    unlink($filepath4);
    
    $_SESSION['message'] = 'Product was deleted successfully!';
    header("location: success.php");
}else{
    $_SESSION['message'] = 'Product images was not deleted!';
    header("location: error.php");
}



///Images from folder also sholud get deleted

