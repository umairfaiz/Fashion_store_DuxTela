<?php 
    require 'database/dbConnect.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <!--font awesome-->
        
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!--        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6533276406494982",
            enable_page_level_ads: true
          });
        </script>-->

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your customer chat code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="213787329066150">
        </div>
        <?php if (isset($_SESSION['message']) && isset($_GET['error']) == 1) { ?>
            <div class="alert"  style="min-width:100%;" >
                <span class="closebtn">&times;</span>  
                <strong><?php echo $_SESSION['message']; ?></strong>
            </div>
            <!--                                        <div class="alert success">
                                                        <span class="closebtn">&times;</span>  
                                                        <strong>Success!</strong> Indicates a successful or positive action.
                                                    </div>-->
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

        <!--if logged in do not show this message-->
<?php if (!isset($_SESSION['logged_in'])) {?>
            <div class="example1"><h3>10% off on sign ups!!</h3></div>
       <?php } ?>  
        
        
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
                                            <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" disabled>
                                                <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                                            </a>
                                        </div>
                                    </div>
                                    <!-- / language -->

                                    <!-- start currency -->
                                    <div class="aa-currency">
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" disabled>
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
                                        
                                        <?php if (!isset($_SESSION['logged_in'])) { ?>
                                            <li><a href="account.php">Sign Up</a></li>
                                            <li class="hidden-xs"><a href="contact.php">Contact Us</a></li>
                                            <li><a href="about.php">About Us</a></li>


                                        <?php } else { ?>
                                            <li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                                            <li class="hidden-xs"><a href="checkout.php">Checkout</a></li>
                                            <li class="hidden-xs"><a href="contact.php">Contact Us</a></li>
                                            <li class="hidden-xs"><a href="about.php">About Us</a></li>
                                            <li ><a href="logout.php">Logout</a></li>
                                            <?php if (isset($_SESSION['logged_in'])) { ?>
                                                <li><a href="account-details.php">Hi, <?php echo $_SESSION['username']; ?></a></li>
                                            <?php } ?>
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
                                     <a href="index.php"><img src="img/logo.jpg" alt="logo img" ></a> 
                                </div>
                                
                                <div id="status"> </div>
                                
<!--                                <button onclick="getInfo()">Get Info</button>
                                <button onclick="login()" >Login</button>-->
                                <!-- / logo  -->
                                <!-- cart box -->
                                <div class="aa-cartbox">
                                    <p id="fb_name"></p>

                                </div>
                                <!-- / cart box -->
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
                                <li><a href="mens.php">Men's</a>
                                    
                                </li>
                                <li><a href="womens.php">Women's</a>
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
 
    </body>
</html>
