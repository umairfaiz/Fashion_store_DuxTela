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
        <link rel="shortcut icon" type="image/ico" href="img/favconlogo.jpg"/>
        <title>Dux Tela | Mens wear</title>

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
                <span>Dux-Tela</span>
            </div>
        </div> 
        <!-- / wpf loader Two -->       
        <!-- SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TOP BUTTON -->

 <!--<font color="WHITE"><marquee direction="left" style="background:RED">Site under maintenance </marquee></font>-->
       <?php
        include("header.php");
       ?>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/Banners/MenBanner1.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Mens Wear</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
          <li class="active">Mens</li>
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
              $result = $db->query("SELECT * FROM items where itemCategory='men'") or die($db->error());
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
<!--                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                  </div>-->
                  <!-- product badge -->
                  <!--<span class="aa-badge aa-sale" href="#">SALE!</span>-->
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
<!--                  <li>
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
                  </li>-->
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
              <h3>Recently Viewed</h3>
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
            <!-- insta feed -->
<!--            <div class="aa-sidebar-widget">
                <h3>Instagram Feed</h3>
                 SnapWidget 
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/589074" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
            </div>-->
            
            <!-- single sidebar -->
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->


  

  <!-- footer -->  
  <?php
                                      include("footer.php");
                                   ?>
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

