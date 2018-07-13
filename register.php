<?php
//require 'database/dbConnect.php';

$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];

$first_name =$db->escape_string($_POST['firstname']);
$last_name = $db->escape_string($_POST['lastname']);
$email = $db->escape_string($_POST['email']);
$address = $db->escape_string($_POST['homeAddress']);
$mobile = $db->escape_string($_POST['mobileno']);
$password = $db->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $db->escape_string( md5( rand(0,1000) ) );

// Check if user with that email already exists
//$result = $db->query("SELECT * FROM users WHERE email='$email'") or die($db->error());
$result = $db->prepare("SELECT * FROM users WHERE email=?") or die($db->error());
$result->bind_param("s",$email);
$result->execute();
$result->close(); //This was n cmmented bcs "Call to a member function bind_param() on boolean" error

if ( $result->affected_rows > 0 ) { //results True
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: account.php?error=1");
    
}
else { 

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (firstname, lastname, email, address, mobile, password, hash) VALUES (?,?,?,?,?,?,?)";
    $result1 = $db->prepare($sql);
    $result1->bind_param('sssssss',$first_name,$last_name,$email,$address,$mobile,$password,$hash);
    // Add user to the database
    //if ($db->query($sql) ){
    if ($result1->execute()){

        //$_SESSION['active'] = 0; //0 until user activates their account with verify.php
         // So we know the user has logged in
//        $_SESSION['message'] =
//                
//                 "Confirmation link has been sent to $email, please verify
//                 your account by clicking on the link in the message!";
        
        //Email to user
        
        $to      = $email;
        $subject = 'Thank you for registering with us! - Duxtela.com';
        $message_body = '
        Hello '.$first_name.',

        Your registration was successful!

        Follow our Facebook page for quick updates:

        https://www.facebook.com/duxtela';  
        
        $message_body=  wordwrap($message_body,70);
        $headers = array("From: Duxtela.com",
            "Reply-To: ".$email,
            "X-Mailer: PHP/" . PHP_VERSION
        );
        mail($to, $subject, $message_body);
        $_SESSION['reg_success'] = true;
        $_SESSION['message'] ='Registration was successful. Login and enjoy shopping!';
        $result1->close();
        header("location: account.php?success=1");
    }

    else {
        $_SESSION['message'] = 'Registration failed! Try again.';
        header("location: account.php?error=1");
    }

}