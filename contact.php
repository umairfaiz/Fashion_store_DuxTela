<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Dux Tela | Contact</title>
    
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
  <?php
  if (isset($_POST['send_mail'])) {
      $to = 'info@duxtela.com'; //info@duxtela
      $subject = 'General Inquiry';
      $from = "From: " . $_REQUEST['email']."\n\n";
      $msg = $from . $_REQUEST['message'];
      $headers = array("From: Duxtela.com",
            "Reply-To: ".$to,
            "X-Mailer: PHP/" . PHP_VERSION
        );
      $msg = wordwrap($msg, 70);
      mail($to, $subject, $msg); //,implode("\r\n",$headers)
      echo 'Email Sent';
  }
  ?>
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
                                        <li class="hidden-xs"><a href="about.php">About Us</a></li>
                                        <li class="hidden-xs"><div class="fa fa-user"> User</div></li>
                                        
                                        <?php } else{?>
                                        <li class="hidden-xs"><a href="wishlist">Wishlist</a></li>
                                        <li class="hidden-xs"><a href="cart">My Cart</a></li>
                                        <li class="hidden-xs"><a href="checkout">Checkout</a></li>
                                        <li class="hidden-xs"><a href="contact.php">Contact Us</a></li>
                                        <li class="hidden-xs"><a href="about.php">About Us</a></li>
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
                        <div class="col-md-12" align="center">
                            <div class="aa-header-bottom-area">
                                <!-- logo  -->
                                <div class="aa-logo">
                                    <!-- Text based logo -->
<!--                                    <a href="index.php">
                                       
                                        <span class="fa fa-shirtsinbulk"></span>
                                        <p>Dux<strong>Tela</strong> <span>Partner of your exclusive soul</span></p>
                                    </a>-->
                                    <!-- img based logo -->
                                     <a href="index.php"><img src="img/logo.jpg" alt="logo img"></a> 
                                </div>
                                
                                <div id="status"> </div>
                                
<!--                                <button onclick="getInfo()">Get Info</button>
                                <button onclick="login()" >Login</button>-->
                                <!-- / logo  -->
                                <!-- cart box -->
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
                                <!-- / cart box -->
                                <!-- search box -->

<!--                               <div class="aa-search-box">
                                   <p id="fb_name"></p>
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
                                <li><a href="mens.php">Mens<span class="caret"></span></a>
                                    
                                </li>
                                <li><a href="womens.php">Womens<span class="caret"></span></a>
<!--                                    <ul class="dropdown-menu">  

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
                                    </ul>-->
                                </li>

                                <li><a href="product.php">All Products </a>
<!--                                <li><a href="popupCust.php" style="
    padding-bottom: 6px;
    padding-top: 5px;
"><button class="button">Customization</button></a></li>-->
                                
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
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Contact</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
          <li class="active">Contact</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
<!--           <div class="aa-contact-top">
             <h2>We are wating to assist you..</h2>
             <p>Feel free to ask anything and everything.</p>
           </div>-->
           <!-- contact map -->
           
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                     <form class="comments-form contact-form" method="POST" action="contact.php">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                            <input type="text" name="name" placeholder="Your Name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                      </div>
                    </div>
<!--                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Subject" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Company" class="form-control">
                        </div>
                      </div>
                    </div>                  -->
                     
                    <div class="form-group">                        
                        <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                    </div>
                       <button class="aa-secondary-btn" name="send_mail">Send</button>
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>Duxtela</h4>
                     <p>Feel free to ask us anything and everything. We are wating to assist you.. </p>
                     <p><span class="fa fa-phone"></span>+94-70-270-6900</p>
                     <p><span class="fa fa-envelope"></span>Email: info@duxtela.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
              <a href="https://www.fb.com"><i class="fa fa-facebook-square"  style="font-size:48px;color:blue;"></i><h3>Like us on Facebook </h3> </a>
           
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

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