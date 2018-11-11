<?php
session_start();
require 'database/dbConnect.php';

//$itemID = $db->escape_string($_POST['itemID']);
$itemID = $db->escape_string($_POST['itemID']);
$cost = $db->escape_string($_POST['cost']);
$quantity = $db->escape_string($_POST['quantity']);
$userID = $db->escape_string($_POST['userID']);
$postcode = $db->escape_string($_POST['postcode']);
$city = $db->escape_string($_POST['city']);
$firstname =$db->escape_string($_POST['firstname']);
$lastname =$db->escape_string($_POST['lastname']);
$email =$db->escape_string($_POST['email']);
$phone =$db->escape_string($_POST['phone']);
$address =$db->escape_string($_POST['address']);
$apartment =$db->escape_string($_POST['apartment']);
$district =$db->escape_string($_POST['district']);
$notes =$db->escape_string($_POST['notes']);
$deliveryStatus='Pending';
$paymentType='cash';

$arritemID =  unserialize(base64_decode($itemID));
$arrcost = unserialize(base64_decode($cost));
$arrquantity = unserialize(base64_decode($quantity));
$count=$_POST['count'];

foreach ($arritemID as $key => $value) {
    $sql = "INSERT INTO orders (itemID, quantity, cost, id, firstName, lastName, email, phone, address, apartment, deliCharges, district, postcode, notes, deliveryStatus, paymentType) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $result1 = $db->prepare($sql);
    $result1->bind_param('iiiissssssssssss',$arritemID[$key],$arrquantity[$key],$arrcost[$key],$userID, $firstname, $lastname, $email, $phone, $address, $apartment, $city, $district, $postcode, $notes, $deliveryStatus, $paymentType);   
}
if ($result1->execute()){
    $sql_deleteCart = "DELETE FROM cart WHERE user=?";
    $result2 = $db->prepare($sql_deleteCart);
    $result2->bind_param('i', $userID);
    $result2->execute();
    $result2->close();
    unset($arritemID);
    unset($arrcost);
    unset($arrquantity);
//Email to user
        
        $to      = $email;
        $subject = 'Thank you for placing the order! - Duxtela.com';
        $message_body = '
        Hello '.$firstname.',

        Your order was placed successfully!
        
        One of our representitive will get back to you shortly, in order to confirm details. 
        
        Happy Shopping!

        Follow our Facebook page for quick updates:

        https://www.facebook.com/duxtela';  
        
        $message_body=  wordwrap($message_body,70);
        $headers = array("From: Duxtela.com",
            "Reply-To: ".$email,
            "X-Mailer: PHP/" . PHP_VERSION
        );
        mail($to, $subject, $message_body);
        $_SESSION['ord_success'] = true;
        $_SESSION['message'] ='Order was placed successfully, We will get back to you shortly to confirm order. Happy Shopping!';
        $result1->close();
        header("location: index.php?success=1");

}

    else {
        $_SESSION['message'] = 'Order placement failed! Try again.';
        header("location: checkout.php?error=1");
    }
//    echo "<script>
//alert('Order was placed successfully. Enojy your product!');
//window.location.href='index.php';
//</script>";