<?php 
    session_start();
    require 'database/dbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Dux Tela | Womens wear</title>

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

 <!--<font color="WHITE"><marquee direction="left" style="background:RED">Site under maintenance </marquee></font>-->
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
                                     <a href="index.php"><img src="img/logo.jpg" alt="logo img" ></a> 
                                </div>
                                
                                <div id="status"> </div>
                                
<!--                                <button onclick="getInfo()">Get Info</button>
                                <button onclick="login()" >Login</button>-->
                                <!-- / logo  -->
                                <!-- cart box -->
                                <div class="aa-cartbox">
                                    <div >   
                            <?php if (isset($_SESSION['logged_in'])) { ?>
                                        <p>Welcome <?php echo $_SESSION['username']; ?>,</p>
                            <?php } ?>
                                    </div>
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
                                   
                                 / search box              
                            </div>-->
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
        <h2>Womens Wear</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
          <li class="active">Womens</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
              <?php
              $result = $db->query("SELECT * FROM items where itemCategory='women'") or die($db->error());
              ?>
              
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                  <?php
              while ($row = mysqli_fetch_array($result)) {
                  ?>
                <!-- start single product item -->
                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="img/<?php echo $row['itemCategory']; ?>/<?php echo $row['itemimg1']; ?>" alt="<?php echo $row['itemimg1']; ?>"></a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#"><?php echo $row['itemName']; ?></a></h4>
                      <span class="aa-product-price">Rs.<?php echo $row['itemPrice']; ?></span>
                      <p class="aa-product-descrip"><?php echo $row['itemDescription']; ?></p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                  </div>
                  <!-- product badge -->
                </li>
                <!-- start single product item -->
                     <?php
              }
              ?>                                  
              </ul>
                 
              <!-- quick view modal -->                  
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">
                        <!-- Modal view slider -->
                        <div class="col-md-6 col-sm-6 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                          <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                  </a>                                    
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                  </a>

                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3>T-Shirt</h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">$34.99</span>
                              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                            <h4>Size</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">S</a>
                              <a href="#">M</a>
                              <a href="#">L</a>
                              <a href="#">XL</a>
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select name="" id="">
                                  <option value="0" selected="1">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Category: <a href="#">Polo T-Shirt</a>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <a href="#" class="aa-add-to-cart-btn">View Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->   
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Category</h3>
              <ul class="aa-catg-nav">
                <li><a href="mens.php">Men</a></li>
                <li><a href="womens.php">Women</a></li>
              </ul>
            </div>
            <!-- single sidebar -->
<!--            <div class="aa-sidebar-widget">
              <h3>Tags</h3>
              <div class="tag-cloud">
                <a href="#">Fashion</a>
                <a href="#">Ecommerce</a>
                <a href="#">Shop</a>
                <a href="#">Hand Bag</a>
                <a href="#">Laptop</a>
                <a href="#">Head Phone</a>
                <a href="#">Pen Drive</a>
              </div>
            </div>
             single sidebar 
            <div class="aa-sidebar-widget">
              <h3>Shop By Price</h3>              
               price range 
              <div class="aa-sidebar-price-range">
               <form action="">
                  <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                  <span id="skip-value-lower" class="example-val">30.00</span>
                 <span id="skip-value-upper" class="example-val">100.00</span>
                 <button class="aa-filter-btn" type="submit">Filter</button>
               </form>
              </div>              

            </div>
             single sidebar 
            <div class="aa-sidebar-widget">
              <h3>Shop By Color</h3>
              <div class="aa-color-tag">
                <a class="aa-color-green" href="#"></a>
                <a class="aa-color-yellow" href="#"></a>
                <a class="aa-color-pink" href="#"></a>
                <a class="aa-color-purple" href="#"></a>
                <a class="aa-color-blue" href="#"></a>
                <a class="aa-color-orange" href="#"></a>
                <a class="aa-color-gray" href="#"></a>
                <a class="aa-color-black" href="#"></a>
                <a class="aa-color-white" href="#"></a>
                <a class="aa-color-cyan" href="#"></a>
                <a class="aa-color-olive" href="#"></a>
                <a class="aa-color-orchid" href="#"></a>
              </div>                            
            </div>-->
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Recently Views</h3>
              <div class="aa-recently-views">
            <ul>
                 
                   <?php
              $result1 = $db->query("SELECT * FROM items ORDER BY rand()LIMIT 3") or die($db->error());
              ?>
                  <?php
              while ($row = mysqli_fetch_array($result1)) {
                  ?>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img src="img/<?php echo $row['itemCategory']; ?>/<?php echo $row['itemimg1']; ?>"  alt="img"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#"><?php echo $row['itemName']; ?></a></h4>
                      <p>Rs.<?php echo $row['itemPrice']; ?></p>
                    </div>                    
                  </li>
                  <?php
              }
              ?>
                                                      
                </ul>
              </div>                            
            </div>
            <!-- single sidebar -->
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->


  

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

                                    <!-- Login Modal -->  
<!--                                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">                      
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4>Login or Register</h4>
                                                    <form class="aa-login-form" action="">
                                                        <label for="">Email address<span>*</span></label>
                                                        <input type="text" placeholder="Username or email">
                                                        <label for="">Password<span>*</span></label>
                                                        <input type="password" placeholder="Password">
                                                        <button class="aa-browse-btn" type="submit">Login</button>
                                                        <div id="status"></div>
                                                        <label for="rememberme" class="rememberme"><div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div> </label>
                                                        <p class="aa-lost-password"><a href="#">Lost your password?</a></p>

                                                                    <div class="aa-register-now">
                                                                      <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                                                    </div>
                                                        <div class="aa-register-now">
                                                            Don't have an account?<a href="account.html">Register now!</a>
                                                        </div>
                                                    </form>
                                                </div>                        
                                            </div> /.modal-content 
                                        </div> /.modal-dialog 
                                    </div>    -->
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

