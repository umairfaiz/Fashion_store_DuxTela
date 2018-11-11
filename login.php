<?php

$email =$db->escape_string($_POST['email']);
$result = $db->query("SELECT * FROM users WHERE email='$email'") or die($db->error());

if($result->num_rows ==0){
    $_SESSION['message'] = 'No such email! Please register.';
    header("location: account.php?error=1");
}
else{  
    $user = $result->fetch_assoc();
    if (password_verify($_POST['password'], $user['password'])){
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['firstname'];
        $_SESSION['userID'] = $user['id'];
        $_SESSION['logged_in'] = true;
        header("location: index.php");
        
    }
    else {
        
       $_SESSION['message'] = 'You have entered a wrong password. Try again!.';
        
        header("location: account.php?error=1");
    }
}



