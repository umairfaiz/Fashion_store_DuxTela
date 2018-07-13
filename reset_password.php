<?php
/* Password reset process, updates database with new user password */
session_start();
require 'database/dbConnect.php';


// Make sure the form is being submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Make sure the two passwords match
    if ( $_POST['password'] == $_POST['password2'] ) { 

        $new_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
        // We get $_POST['email'] and $_POST['hash'] from the hidden input field of reset.php form
        $email = $db->escape_string($_POST['email']);
        $hash = $db->escape_string($_POST['hash']);
        
        $sql = "UPDATE users SET password=?, hash=? WHERE email=?";
        $result1 = $db->prepare($sql);
        $result1->bind_param('sss', $new_password, $hash, $email);
        if ( $result1->execute() ) {

        $_SESSION['message'] = "Your password has been changed successfully!";
        header("location: account.php?success=1");    

        }
        else{
            $_SESSION['message'] = "Password rest failed! Please click on the link sent & try again.";
        header("location: forgot.php?error=1"); 
            
        }

    }
    else {
        $_SESSION['message'] = "Two passwords you entered don't match! Please click on the link sent & try again.";
        header("location: forgot.php?error=1");    
    }

}
?>