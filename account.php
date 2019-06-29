<?php
require 'database/dbConnect.php';
session_start();
require_once __DIR__ . '/src/Facebook/autoload.php';

//$db = mysqli_connect('localhost','duxtelac_duxtelaSite','$Wallnut555','duxtelac_duxtelaSite');
//if ($db->connect_error) {
//    die("Connection failed: " . $db->connect_error);
//}
$fb = new Facebook\Facebook(array(
    'app_id' => '2051748631728164',
    'app_secret' => '6aec65751fef41e7fce0117f9891d2ed',
    'default_graph_version' => 'v2.5',
        ));

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // optional

try {
    if (isset($_SESSION['facebook_access_token'])) {
        $accessToken = $_SESSION['facebook_access_token'];
    } else {
        $accessToken = $helper->getAccessToken();
    }
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    $_SESSION['message'] = 'Error  : ' . $e->getMessage();

    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    $_SESSION['message'] = 'Error  : ' . $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link rel="shortcut icon" type="image/ico" href="img/logo.jpg"/>
        <title>Dux Tela | Account Page</title>

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
         <link href="alert_msg/alertMsg.css" rel="stylesheet">    

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
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['register'])) { //user register
            require 'register.php'; //FAILING BECAUSE OF ./ JUST CHECK WITH INCLUDE, VIDEOS 
        } 
        elseif (isset($_POST['login'])){
            require 'login.php'; //FAILING BECAUSE OF ./ JUST CHECK WITH INCLUDE, VIDEOS 
            
        }
    
    }
?>
    
    <body>
        

        <!-- wpf loader Two -->
        <div id="wpf-loader-two">          
            <div class="wpf-loader-two-inner">
                <span>Dux-Tela</span>
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
            <img src="img/Banners/AccountBanner.jpg" alt="fashion img">
            <div class="aa-catg-head-banner-area">
                <div class="container">
                    <div class="aa-catg-head-banner-content">
                        <h2>Account Page</h2>
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
<!--                        <div>   
                            <?php if (isset($_SESSION['message']) && isset($_GET['error'])==1) { ?>
                                        <div class="alert"  style="min-width:100%;" >
                                            <span class="closebtn">&times;</span>  
                                            <strong><?php echo $_SESSION['message']; ?></strong>
                                        </div>
                                        <div class="alert success">
                                            <span class="closebtn">&times;</span>  
                                            <strong>Success!</strong> Indicates a successful or positive action.
                                        </div>
                            <?php } ?>
                            <?php if (isset($_SESSION['fbmessage'])) { ?>
                                <div class="alert"  style="min-width:100%;" >
                                    <span class="closebtn">&times;</span>  
                                    <strong><?php echo $_SESSION['fbmessage']; ?></strong>
                                </div>
                             
                            <?php } ?>
                            <?php if (isset($_SESSION['message']) && isset($_GET['success']) == 1) { ?>

                                <div class="alert success"  style="min-width:100%;" >
                                    <span class="closebtn">&times;</span>  
                                    <strong><?php echo $_SESSION['message']; ?></strong>

                                </div>
                            <?php } ?>
                                    </div>-->
                        <div class="aa-myaccount-area">            
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="aa-myaccount-login">
                                        <h4>Login</h4>
                                        <form action="account.php?loginstate=1" method="post" class="aa-login-form">
                                            <label >Email address<span>*</span></label>
                                            <input type="email" name="email" placeholder="Email">
                                            <label >Password<span>*</span></label>
                                            <input type="password" name="password" placeholder="Password">
                                            <button type="submit" class="aa-browse-btn" name="login">Login</button><br>

                                            <label class="aa-lost-password"><a href="forgot.php">Lost your password?</a></label><br>
                                        </form>

                                        <?php
                                        if (isset($accessToken)) {
                                            if (isset($_SESSION['facebook_access_token'])) {
                                                $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
                                            } else {
                                                // getting short-lived access token
                                                $_SESSION['facebook_access_token'] = (string) $accessToken;

                                                // OAuth 2.0 client handler
                                                $oAuth2Client = $fb->getOAuth2Client();

                                                // Exchanges a short-lived access token for a long-lived one
                                                $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);

                                                $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;

                                                // setting default access token to be used in script
                                                $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
                                            }

                                            // redirect the user back to the same page if it has "code" GET variable
//                                            if (isset($_GET['code'])) {
//                                                header("Location:./");
//                                            }

                                            // getting basic info about user
                                            try {
                                                $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
                                                $profile = $profile_request->getGraphUser();
                                            } catch (Facebook\Exceptions\FacebookResponseException $e) {
                                                // When Graph returns an error
                                                $_SESSION['fbmessage'] = 'Error  : ' .$e->getMessage();
                                                session_destroy();
                                                // redirecting user back to app login page
//                                                header("Location:./");
                                                exit;
                                            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                                                // When validation fails or other local issues
                                                $_SESSION['fbmessage'] = 'Error  : ' .$e->getMessage();
                                                exit;
                                            }

                                            $first_name = $profile->getFirstName();
                                            $last_name = $profile->getLastName();
                                            $email = $profile->getProperty('email');
                                            $_SESSION['lastname'] = $last_name;

                                            $validateQuery = "SELECT * FROM users WHERE email='$email'";
                                            $result = $db->query($validateQuery) or die($db->error());
                                            

                                            if ($result->num_rows > 0) { //results True
                                                //$_SESSION['message'] = 'User with this email already exists! Try Logging in.';
//                                                header("Location:check1.php");
                                                $result2=$result->fetch_assoc();
                                                $_SESSION['logged_in'] = true;
                                                $_SESSION['username'] = $result2['firstname'];
                                                echo '<meta http-equiv="refresh" content="1; URL=index.php" />';
                                                exit();
                                            } else {
                                                $sql = "INSERT INTO users (firstname, lastname, email) VALUES ('{$first_name}', '{$last_name}', '{$email}')";

                                                if ($db->query($sql) === TRUE) {
                                                    //$_SESSION['message'] = 'Logged in successfully';
                                                    $_SESSION['logged_in'] = true;
                                                    $_SESSION['username'] = $first_name;
                                                } else {
                                                    $_SESSION['fbmessage'] = 'Error  : in sql. Try again';
                                                    //echo "Error: " . $sql . "<br>" . $db->error;
                                                }

                                                $db->close();
                                                //header("Location:check2.php");
                                                echo '<meta http-equiv="refresh" content="1; URL=https://duxtela.com/index.php" />';
                                                exit();
                                            }
                                            // Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']
                                        } else {
                                            // replace your website URL same as added in the developers.facebook.com/apps e.g. if you used http instead of https and you used non-www version or www version of your website then you must add the same here
                                            $loginUrl = $helper->getLoginUrl('https://duxtela.com/account.php', $permissions);

                                            echo '<a class="btn btn-primary" href="' . $loginUrl . '"><i class="fa fa-facebook-square"></i> Log in with Facebook</a>';
                                        }
                                        ?>  

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="aa-myaccount-register">                 
                                        <h4>Register</h4>
                                        <form action="account.php" method="post" class="aa-login-form">
                                            <label >First name</label>
                                            <input type="text" name="firstname" placeholder="First name">
                                            <label >Last name<span>*</span></label>
                                            <input type="text" name="lastname" placeholder="Last name">
                                            <label >Email address<span>*</span></label>
                                            <input type="email" name="email" placeholder="Email">
                                            <label >Home address</label>
                                            <input type="text" name="homeAddress" placeholder="Home address">
                                            <label >Mobile number</label>
                                            <input type="text" name="mobileno" placeholder="Mobile number">
                                            <label >Password<span>*</span></label>
                                            <input type="password" name="password" placeholder="Password">
                                            <label >Confirm password<span>*</span></label>
                                            <input type="password" name="password2" placeholder="Confirm password">
                                            <button type="submit" class="aa-browse-btn" name="register">Register</button><br>
                                            <label class="aa-lost-password"><a href="#"></a></label><br>
                                                
                                           <!--<button type="submit" class="aa-browse-btn" name="fbRegister"><i class="fa fa-facebook-square"></i>  Sign up With Facebook</button>-->
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

                           



 <script src="alert_msg/alertmsg.js"></script>
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