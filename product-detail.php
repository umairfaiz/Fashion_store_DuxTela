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
    <title>Dux Tela | Product Details</title>
    
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
                <span>Dux-Tela</span>
            </div>
        </div> 
        <!-- / wpf loader Two -->       
        <!-- SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TOP BUTTON -->

 <!--<font color="WHITE"><marquee direction="left" style="background:RED">Site under maintenance </marquee></font>-->
        <!-- Start header section -->
        <?php
                                      include("header.php");
                                   ?>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/Banners/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Product Details</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
          <li><a href="#">Product</a></li>
          <li class="active">Details</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a  class="simpleLens-lens-image"><img src="img/view-slider/medium/Ella floral summer dress.png" class="simpleLens-big-image"></a></div>
                      </div>
                      <div class="simpleLens-thumbnails-container">
                          <a data-big-image="img/view-slider/medium/Ella floral summer dress.png" class="simpleLens-thumbnail-wrapper" >
                              <img src="img/view-slider/thumbnail/Ella floral summer dress_thumbnail.png">
                          </a>                                    
                          <a data-big-image="img/view-slider/medium/Ella floral summer dress - Back.png" class="simpleLens-thumbnail-wrapper" >
                              <img src="img/view-slider/thumbnail/Ella floral summer dress_thumbnail - Back.png">
                          </a>
                          
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>T-Shirt</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">LKR 34.99</span>
                      <p class="aa-product-avilability">Availability: <span>In stock</span></p>
                    </div>
                    <!--<p>nslslvj sgji jjapo apfa fhiafhap fjpa fha fhia fiaifupahi obnjknbjsnsioghiowhvjkzbv zfafa ofhubfjkaiohiobjk</p>-->
                    <h4>Size</h4>
                    <div class="aa-prod-view-size">
                        <form action="">                
                      <select id="" name="">
                          <option selected="1" value="0">XS</option>
                          <option value="1">S</option>
                          <option value="2">M</option>
                          <option value="3">L</option>
                          <option value="4">XL</option>
                        </select>
                            </form>
                    </div>
                    <!--<h4>Color</h4>
                    <div class="aa-color-tag">
                      <a href="#" class="aa-color-green"></a>
                      <a href="#" class="aa-color-yellow"></a>
                      <a href="#" class="aa-color-pink"></a>                      
                      <a href="#" class="aa-color-black"></a>
                      <a href="#" class="aa-color-white"></a>                      
                    </div>-->
                    <div class="aa-prod-quantity">
                      <form action="">
                          <h4>Quantity </h4><select id="" name="">
                          <option selected="1" value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      </form>
                      
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
                      <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>            
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                  </ul>
                  </div>
                        
              </div>
            </div>
            <!-- Related product -->
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->

  <!-- footer -->  
  <?php
                                      include("footer.php");
                                   ?>


    
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