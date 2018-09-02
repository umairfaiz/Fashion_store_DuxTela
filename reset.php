<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
session_start();
require 'database/dbConnect.php';

// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $db->escape_string($_GET['email']); 
    $hash = $db->escape_string($_GET['hash']); 

    // Make sure user email with matching hash exist
    $result = $db->query("SELECT * FROM users WHERE email='$email' AND hash='$hash'");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "You have entered invalid URL for password reset! Resend link.";
        header("location: forgot.php?error=1");
    }
}
else {
    $_SESSION['message'] = "Sorry, verification failed, Try resending the verification link!";
    header("location: forgot.php?error=1.php");  
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
        <header id="aa-header">
            <!-- start header top  -->
            <div class="aa-header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-header-top-area">
                                <!-- start header top left -->
                                <div class="aa-header-top-left">
                                    <!-- start language -->
                                    <div class="aa-language">
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                                            </a>
                                        </div>
                                    </div>
                                    <!-- / language -->

                                    <!-- start currency -->
                                    <div class="aa-currency">
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-money"></i>LKR
                                            </a>
                                        </div>
                                    </div>
                                    <!-- / currency -->
                                    <!-- start cellphone -->
                                    <div class="cellphone hidden-xs">
                                        <p><span class="fa fa-phone"></span>+94-70-270-6900</p>
                                    </div>
                                    <!-- / cellphone -->
                                </div>
                                <!-- / header top left -->
                                <div class="aa-header-top-right">
                                    <ul class="aa-head-top-nav-right">
                                        <?php if (!isset($_SESSION['logged_in'])){ ?>
                                        <li class="hidden-xs"><a href="account.php">Account</a></li>
                                        <li class="hidden-xs"><a href="contact.php">Contact Us</a></li>
                                        
                                        <?php } else{?>
                                        <li class="hidden-xs"><a href="wishlist">Wishlist</a></li>
                                        <li class="hidden-xs"><a href="cart">My Cart</a></li>
                                        <li class="hidden-xs"><a href="checkout">Checkout</a></li>
                                        <li class="hidden-xs"><a href="contact.php">Contact Us</a></li>
                                        <li class="hidden-xs"><a href="logout.php">Logout</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / header top  -->

            <!-- start header bottom  -->
            <div class="aa-header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-header-bottom-area">
                                <!-- logo  -->
                                <div class="aa-logo">
                                    <!-- Text based logo -->
                                    <a href="index.php">
                                        <span class="fa fa-shirtsinbulk"></span>
                                        <p>Dux<strong>Tela</strong> <span>Partner of your exclusive soul</span></p>
                                    </a>
                                    <!-- img based logo -->
                                    <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                                </div>
                                <!-- / logo  -->
                                <!-- cart box -->
                                <div class="aa-cartbox">
                                    <div class="aa-cartbox">
                                        <p id="fb_name"></p>
                                        <!--                                  <a class="aa-cart-link" href="#">
                                                                            <span class="fa fa-"></span>
                                                                            <span class="aa-cart-title">SHOPPING CART</span>
                                                                            <span class="aa-cart-">2</span>
                                                                          </a>-->
                                        <!--                                  <div class="aa-cartbox-summary">
                                                                            <ul>
                                                                              <li>
                                                                                <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                                                                                <div class="aa-cartbox-info">
                                                                                  <h4><a href="#">Product Name</a></h4>
                                                                                  <p>1 x $250</p>
                                                                                </div>
                                                                                <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                                                              </li>
                                                                              <li>
                                                                                <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                                                                                <div class="aa-cartbox-info">
                                                                                  <h4><a href="#">Product Name</a></h4>
                                                                                  <p>1 x $250</p>
                                                                                </div>
                                                                                <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                                                              </li>                    
                                                                              <li>
                                                                                <span class="aa-cartbox-total-title">
                                                                                  Total
                                                                                </span>
                                                                                <span class="aa-cartbox-total-price">
                                                                                  $500
                                                                                </span>
                                                                              </li>
                                                                            </ul>
                                                                            <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                                                                          </div>-->
                                    </div>
                                </div>
                                <!-- / cart box -->
                                <!-- search box -->
                                <!--                                <div class="aa-search-box">
                                                                    <form action="">
                                                                        <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                                                                        <button type="submit"><span class="fa fa-search"></span></button>
                                                                    </form>
                                                                </div>-->
                                <!-- / search box -->             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / header bottom  -->
        </header>
        <!-- / header section -->
        <!-- menu -->
        <section id="menu">
            <div class="container">
                <div class="menu-area">
                    <!-- Navbar -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>          
                        </div>
                        <div class="navbar-collapse collapse">
                            <!-- Left nav -->
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="admin_index.php">Men <span class="caret"></span></a>
                                    <ul class="dropdown-menu">  
                                        <li><a href="#">Tshirt<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Polo</a></li>
                                                <li><a href="#">Round neck</a></li>
                                                <li><a href="#">Hoodies</a></li>                                      
                                            </ul>
                                        </li>
                                        <li><a href="#">Shirts<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Formal</a></li>
                                                <li><a href="#">Standard</a></li>                                           
                                            </ul>

                                        </li>


                                    </ul>
                                </li>
                                <li><a href="#">Women <span class="caret"></span></a>
                                    <ul class="dropdown-menu">  

                                        <li><a href="#">Trousers</a></li>    
                                        <li><a href="#">Sports</a></li>             
                                        <li><a href="#">Sarees</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">And more.. <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Sleep Wear</a></li>
                                                <li><a href="#">And more.. <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">

                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Polo T-Shirts</a></li>
                                                        <li><a href="#">SKirts</a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Tops</a></li>                      
                                                    </ul>
                                                </li>                   
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="#">All Products </a>
                                <li><a href="popupCust.php" style="padding-bottom: 6px;padding-top: 5px;"><button class="button">Customization</button></a></li>

<!--<li><a href="#">Digital <span class="caret"></span></a>
  <ul class="dropdown-menu">                
    <li><a href="#">Camera</a></li>
    <li><a href="#">Mobile</a></li>       
    <li><a href="#">Tablet</a></li>
    <li><a href="#">Laptop</a></li>                                                
    <li><a href="#">Accesories</a></li>                
  </ul>
</li>
<li><a href="#">Furniture</a></li>            
<li><a href="blog-archive.html">Blog <span class="caret"></span></a>
  <ul class="dropdown-menu">                
    <li><a href="blog-archive.html">Blog Style 1</a></li>
    <li><a href="blog-archive-2.html">Blog Style 2</a></li>
    <li><a href="blog-single.html">Blog Single</a></li>                
  </ul>
</li>
<li><a href="contact.html">Contact</a></li>
<li><a href="#">Pages <span class="caret"></span></a>
  <ul class="dropdown-menu">                
    <li><a href="product.html">Shop Page</a></li>
    <li><a href="product-detail.html">Shop Single</a></li>                
    <li><a href="404.html">404 Page</a></li>                
  </ul>
</li>
</ul>
</div><!--/.nav-collapse -->
                        </div>
                    </div>       
                </div>
        </section>
        <!-- / menu -->  

        <!-- catg header banner section -->
        <section id="aa-catg-head-banner">
            <img src="img/Banners/fashion-header-bg-8.jpg" alt="fashion img">
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
                        <div>
                            <?php if (isset($_SESSION['message']) && isset($_GET['error']) == 1) { ?>
                                <div class="alert">
                                    <span class="closebtn">&times;</span>  
                                    <strong><?php echo $_SESSION['fbmessage']; ?></strong>
                                </div>
                             
                            <?php } ?>
                            <?php if (isset($_SESSION['message']) && isset($_GET['success']) == 1) { ?>

                                <div class="alert success">
                                    <span class="closebtn">&times;</span>  
                                    <strong><?php echo $_SESSION['message']; ?></strong>

                                </div>
                            <?php } ?>
                        </div>
                        <div class="aa-myaccount-area">         
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="aa-myaccount-login">
                                        <h4>Reset Password</h4>
                                        <form action="reset_password.php" method="post" class="aa-login-form">
                                            <label >Password<span>*</span></label>
                                            <input type="password" name="password" placeholder="Password">
                                            <label >Confirm password<span>*</span></label>
                                            <input type="password" name="password2" placeholder="Confirm password">
                                            <input type="hidden" name="email" value="<?= $email ?>">    
                                            <input type="hidden" name="hash" value="<?= $hash ?>">
                                            <button type="submit" class="aa-browse-btn" name="reset">Reset</button><br>

                                            
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
        <footer id="aa-footer">
            <!-- footer bottom -->
            <div class="aa-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-footer-top-area">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="aa-footer-widget">
                                            <h3>Main Menu</h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Our Products</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="aa-footer-widget">
                                            <div class="aa-footer-widget">
                                                <h3>Knowledge Base</h3>
                                                <ul class="aa-footer-nav">
                                                    <li><a href="#">Delivery</a></li>
                                                    <li><a href="#">Returns</a></li>
                                                    <li><a href="#">Discount</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="aa-footer-widget">
                                            <div class="aa-footer-widget">
                                                <h3>Useful Links</h3>
                                                <ul class="aa-footer-nav">
                                                    <li><a href="#">Customers</a></li>
                                                    <li><a href="#">Reviews</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="aa-footer-widget">
                                            <div class="aa-footer-widget">
                                                <h3>Contact Us</h3>
                                                <address>
                                                    <p> Address</p>
                                                    <p><span class="fa fa-phone"></span>+94-70-270-6900</p>
                                                    <p><span class="fa fa-envelope"></span>info@duxtela.com</p>
                                                </address>
                                                <div class="aa-footer-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-instagram"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
            <div class="aa-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-footer-bottom-area">
                                <p><span class="fa fa-copyright"> 2017, Duxtela | <a href="http://www.facebook.com/inovoratech">Inovora Technologies</a></span></p>
                                <div class="aa-footer-payment">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
