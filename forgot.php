<?php
session_start();
require 'database/dbConnect.php';

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $db->escape_string($_POST['email']);
    $result =  $db->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: forgot.php?error=1");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['firstname'];

        // Session message to display on success.php
        $_SESSION['message'] = "Please check your email $email"
        . " for a confirmation link to complete your password reset!";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ( Duxtela.com )';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        https://www.duxtela.com/reset.php?email='.$email.'&hash='.$hash;  
        $message_body=  wordwrap($message_body,70);
        $headers = array("From: Duxtela.com",
            "Reply-To: ".$email,
            "X-Mailer: PHP/" . PHP_VERSION
        );
        mail($to, $subject, $message_body);

        header("location: account.php?success=1");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Dux Tela | Reset Account Page</title>

        <!-- Font awesome -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">   
        <!-- SmartMenus jQuery Bootstrap Addon CSS -->
        <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
        <!-- Product view slider -->
        <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
        <!-- slick slider -->
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <!-- price picker slider -->
        <link rel="stylesheet" type="text/css" href="css/nouislider.css">
        <!-- Theme color -->
        <link id="switcher" href="css/theme-color/green-theme.css" rel="stylesheet">


        <!-- Main style sheet -->
        <link href="css/style.css" rel="stylesheet">    
        <link href="button/glowingButton.css" rel="stylesheet"> 

        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        

        <!-- wpf loader Two -->
        <div id="wpf-loader-two">          
            <div class="wpf-loader-two-inner">
                <span>Loading</span>
            </div>
        </div> 
        <!-- / wpf loader Two -->       
        <!-- SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TOP BUTTON -->


        <!-- Start header section -->
        <?php
                                      include("header.php");
                                   ?>
        <!-- / menu -->  

        <!-- catg header banner section -->
        <section id="aa-catg-head-banner">
            <img src="img/Banners/AccountBanner.jpg.jpg" alt="fashion img">
            <div class="aa-catg-head-banner-area">
                <div class="container">
                    <div class="aa-catg-head-banner-content">
                        <h2>Reset Account Page</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>                   
                            <li class="active">Account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- / catg header banner section -->

        <!-- Cart view section -->
        <section id="aa-myaccount">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div >   
                            <?php if (isset($_SESSION['message']) && isset($_GET['error']) == 1) { ?>
                                <div class="alert">
                                    <span class="closebtn">&times;</span>  
                                    <strong><?php echo $_SESSION['message']; ?></strong>
                                </div>
                            <?php } ?>
                            
                        </div>
                        <div class="aa-myaccount-area">         
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="aa-myaccount-login">
                                        <h4>Forgot Password</h4>
                                        <form action="forgot.php" method="post" class="aa-login-form">
                                            <label >Email address<span>*</span></label>
                                            <input type="email" name="email" placeholder="Email">

                                            <button type="submit" class="aa-browse-btn" >Send Email</button><br>

                                            
                                        </form>
                                    </div>
                                </div>
                                
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Cart view section -->

        <!-- footer -->  
        <?php
                                      include("footer.php");
                                   ?>
        <!-- / footer -->





        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>  
        <!-- SmartMenus jQuery plugin -->
        <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
        <!-- SmartMenus jQuery Bootstrap Addon -->
        <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
        <!-- Product view slider -->
        <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
        <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
        <!-- slick slider -->
        <script type="text/javascript" src="js/slick.js"></script>
        <!-- Price picker slider -->
        <script type="text/javascript" src="js/nouislider.js"></script>

        <!-- Custom js -->
        <script src="js/custom.js"></script> 



    </body>
</html>