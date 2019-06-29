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
        <title>Dux Tela | Home</title>

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

        <!-- Testimonial CSS -->
<!--        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">-->
<!--        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">-->
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

        <!--<font color="BLACK"><marquee direction="left" style="background:#B1E010"  scrollamount="5">10% off on sign ups!!</marquee></font>-->

        <!-- Start header section -->
        <?php
                                      include("header.php");
                                   ?>

                                    <!-- / menu -->

                                    <!-- Start slider -->
                                    <section id="aa-slider">
                                        <div class="aa-slider-area">
                                            <div id="sequence" class="seq">
                                                <ul class="seq-canvas">
                                                    <!-- single slide item -->
                                                    <li>
                                                        <div class="seq-model">
                                                            <img data-seq src="img/slider/Slider1.jpg" alt="slide img" />
                                                        </div>
                                                        <div class="seq-title">

                                                            <h2 data-seq>Men's Collection</h2>                
                                                            <!--<p data-seq>Branded T-shirts</p>-->
                                                            <a data-seq href="mens.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                                        </div>
                                                    </li>
<!--                                                    <li>
                                                        <div class="seq-model">
                                                            <img data-seq src="img/slider/Slider1.jpg" alt="slide img" />
                                                        </div>
                                                        <div class="seq-title">

                                                            <h2 data-seq>Mens Collection</h2>                
                                                            <p data-seq>Branded T-shirts</p>
                                                            <a data-seq href="mens.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                                        </div>
                                                    </li>-->
                                                    <!-- single slide item -->
<!--                                                    <li>
                                                        <div class="seq-model">
                                                            <img data-seq src="img/slider/Slider2.jpg" alt="slide img" />
                                                        </div>
                                                        <div class="seq-title">
                                                            <span data-seq>Get your T-shirt customized</span>                
                                                            <h2 data-seq>Womens Collection</h2>                
                                                            <p data-seq>sdnksndklnl aflanfln</p>
                                                            <a data-seq href="womens.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                                        </div>
                                                    </li>-->
                                                    <li>
                                                        <div class="seq-model">
                                                            <img data-seq src="img/slider/Slider2.jpg" alt="slide img" />
                                                        </div>
                                                        <div class="seq-title">
                                                            <!--<span data-seq>Get your T-shirt customized</span>-->                
                                                            <h2 data-seq>Women's Collection</h2>                
                                                            <!--<p data-seq>sdnksndklnl aflanfln</p>-->
                                                            <a data-seq href="womens.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                                        </div>
                                                    </li>         
                                                   
                                                </ul>
                                                <!-- slider navigation btn -->
                                                
<!--                                                        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                                                          <a type="button" class="seq-prev" aria-label="Previous" style="visibility: hidden"></a><i class="fas fa-chevron-left"></i>
                                                          <a type="button" class="seq-next" aria-label="Next" style="visibility: hidden"><span class="fa fa-angle-right"></span></a>
                                                        </fieldset>-->
                                                
                                            </div>
                                        </div>
                                    </section>
                                    <!-- / slider -->
                                    <!-- Products section -->
                                    <section id="aa-product">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="aa-product-area">
                                                            <div class="aa-product-inner">
                                                                <!-- start prduct navigation -->
                                                                <ul class="nav nav-tabs aa-products-tab">
                                                                    <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                                                                    <li><a href="#women" data-toggle="tab">Women</a></li>
                                                                    <!--<li><a href="#allProd" data-toggle="tab">All</a></li>-->
                                                                    <!--<li><a href="#customized" data-toggle="tab">Customized</a></li>-->
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content">
                                                                    <!-- Start men product category -->
                                                                    <div class="tab-pane fade in active" id="men">
                                                                        <?php
                                                                        $resultmen = $db->query("SELECT * FROM items where itemCategory='men' ORDER BY rand()LIMIT 8") or die($db->error());
                                                                        ?>
                                                                        <ul class="aa-product-catg">

                                                                            <?php
                                                                            while ($row = mysqli_fetch_array($resultmen)) {
                                                                                ?>
                                                                                <!-- start single product item -->
                                                                                <li>
                                                                                    <figure>
                                                                                        <a class="aa-product-img" href="getProduct.php?itemid=<?php echo $row['itemID']; ?>&pagelocation=index"><img src="img/<?php echo $row['itemCategory']; ?>/<?php echo $row['itemimg1']; ?>" alt="img"></a>
                                                                                        <!--<a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>-->
                                                                                        <figcaption>
                                                                                            <h4 class="aa-product-title"><a href="#"><?php echo $row['itemName']; ?></a></h4>
                                                                                            <span class="aa-product-price">LKR <?php echo $row['itemPrice']; ?></span>
                                                                                        </figcaption>
                                                                                    </figure>                        
<!--                                                                                    <div class="aa-product-hvr-content">
                                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    </div>-->
                                                                                    <!-- product badge -->
                                                                                    <!-- <span class="aa-badge aa-sale" href="#">SALE!</span>-->
                                                                                </li>
                                                                                <!-- start single product item -->
                                                                                <?php
                                                                            }
                                                                            ?>

                                                                        </ul>
<!--                                                                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-arrow-right"></span></a>-->
                                                                    </div>
                                                                    <!-- / men product category -->
                                                                    <!-- start women product category -->
                                                                    <div class="tab-pane fade" id="women">
                                                                        <?php
                                                                        $resultmen = $db->query("SELECT * FROM items where itemCategory='women' ORDER BY rand()LIMIT 8") or die($db->error());
                                                                        ?>
                                                                        <ul class="aa-product-catg">

                                                                            <?php
                                                                            while ($row = mysqli_fetch_array($resultmen)) {
                                                                                ?>
                                                                                <!-- start single product item -->
                                                                                <li>
                                                                                    <figure>
                                                                                        <a class="aa-product-img" href="getProduct.php?itemid=<?php echo $row['itemID']; ?>&pagelocation=index"><img src="img/<?php echo $row['itemCategory']; ?>/<?php echo $row['itemimg1']; ?>" alt="img"></a>
                                                                                        <!--<a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>-->
                                                                                        <figcaption>
                                                                                            <h4 class="aa-product-title"><a href="#"><?php echo $row['itemName']; ?></a></h4>
                                                                                            <span class="aa-product-price">LKR <?php echo $row['itemPrice']; ?></span>
                                                                                        </figcaption>
                                                                                    </figure>                        
<!--                                                                                    <div class="aa-product-hvr-content">
                                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    </div>-->
                                                                                    <!-- product badge -->
                                                                                    <!-- <span class="aa-badge aa-sale" href="#">SALE!</span>-->
                                                                                </li>
                                                                                <!-- start single product item -->
                                                                                <?php
                                                                            }
                                                                            ?>

                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                                <!-- quick view modal -->                  
                                                                <!--                                                                <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                                                                    <div class="modal-dialog">
                                                                                                                                        <div class="modal-content">                      
                                                                                                                                            <div class="modal-body">
                                                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                                                                                <div class="row">
                                                                                                                                                     Modal view slider 
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
                                                                                                                                                     Modal view content 
                                                                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                                                                        <div class="aa-product-view-content">
                                                                                                                                                            <h3>T-Shirt</h3>
                                                                                                                                                            <div class="aa-price-block">
                                                                                                                                                                <span class="aa-product-view-price">$34.99</span>
                                                                                                                                                                <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                                                                                                                                            </div>
                                                                                                                                                            <p>sjbfjksf iafiahfi aia fhiahfiap cna ioa goofho hbvbjk nvls afj vsioiosv vjnvjsio vsvsvznmcnklafpghpe  vnidnvipfa gpagjpalmo48593949 gw ioshgio092urfij f4\g5fba fi aio3u4u9 afioaifq30y28y5 f fiafi!</p>
                                                                                                                                                            <h4>Size</h4>
                                                                                                                                                            <div class="aa-prod-view-size">
                                                                                                                                                                <a href="#">XS</a>
                                                                                                                                                                <a href="#">S</a>
                                                                                                                                                                <a href="#">M</a>
                                                                                                                                                                <a href="#">L</a>
                                                                                                                                                                <a href="#">XL</a>
                                                                                                                                                                <a href="#">XXL</a>
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
                                                                                                                                        </div> /.modal-content 
                                                                                                                                    </div> /.modal-dialog 
                                                                                                                                </div> / quick view modal               -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- / Products section -->
                                    <!-- banner section -->
<!--                                    <section id="aa-banner">
                                      <div class="container">
                                        <div class="row">
                                          <div class="col-md-12">        
                                            <div class="row">
                                              <div class="aa-banner-area">
                                              <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img"></a>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </section>-->

                                    <!-- Support section -->
                                    <section id="aa-support">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="aa-support-area">
                                                        <!-- single support -->
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="aa-support-single">
                                                                <span class="fa fa-truck"></span>
                                                                <h4>WORLDWIDE SHIPPING*</h4>
                                                                <P>Free shipping within city limits</P>
                                                            </div>
                                                        </div>
                                                        <!-- single support -->
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="aa-support-single">
                                                                <span class="fa fa-clock-o"></span>
                                                                <h4>7 DAYS MONEY BACK*</h4>
                                                                <P>Exchange or money back for all orders</P>
                                                            </div>
                                                        </div>
                                                        <!-- single support -->
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="aa-support-single">
                                                                <span class="fa fa-phone"></span>
                                                                <h4>SUPPORT 24/7</h4>
                                                                <P>24/7 customer support</P>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </section>
                                    
                                    <!-- insta feed -->
<!--                                     <section id="aa-latest-blog">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="aa-latest-blog-area">
                                                        <h2>Check us out Instagram</h2>
                                                        <div class="row">
                                                             SnapWidget 
                                                            <script src="https://snapwidget.com/js/snapwidget.js"></script>
                                                            <iframe src="https://snapwidget.com/embed/589046" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>

                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </section>-->
                                    
                                    <!-- Testimonial -->
                                    <section id="aa-testimonial">  
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="aa-testimonial-area">

                                                        <ul class="aa-testimonial-slider">

                                                            <!--single slide--> 
                                                            <li>
                                                                <div class="aa-testimonial-single">
                                                                    <img class="aa-testimonial-img" src="img/testimonialDefault.jpg" alt="testimonial img">
                                                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                                                    <p>Everything about my order was exceptional. I will definitely choose Dux-Tela again.</p>
                                                                    <div class="aa-testimonial-info">
                                                                        <p>Chanu</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!--single slide--> 
                                                            <li>
                                                                <div class="aa-testimonial-single">
                                                                    <img class="aa-testimonial-img" src="img/testimonialDefault.jpg" alt="testimonial img">
                                                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>

                                                                    <div class="aa-testimonial-info">
                                                                        <p>Best best best.. One of the best .. I ordered 40 training kits from duxtela and got it on time and got a good price compared to others in the business..</p>
                                                                        <div class="aa-testimonial-info">
                                                                            <p>Inamul Hassan</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!--single slide--> 
                                                            <li>
                                                                <div class="aa-testimonial-single">
                                                                    <img class="aa-testimonial-img" src="img/testimonialDefault.jpg" alt="testimonial img">
                                                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                                                    <p>I received my parcel, thank you very much for that. It is awesome, one of the best t-shirt collection I have ever have.</p>
                                                                    <div class="aa-testimonial-info">
                                                                        <p>Vimanthi Shamindy</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        <div class="testimonials-container section-container section-container-image-bg">
                                                                                    <div class="container">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12 testimonials section-description">
                                                                                                <h2>Our Testimonials</h2>
                                                                                                <div class="divider-1"><div class="line"></div></div>
                                                                                                <p class="medium-paragraph">Take a look below to learn what our clients are saying about us:</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-10 col-sm-offset-1 testimonial-list">
                                                                                                <div role="tabpanel">
                                                                                                     Tab panes 
                                                                                                    <div class="tab-content">
                                                                                                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                                                                                            <div class="testimonial-image">
                                                                                                                <img src="assets/img/testimonials/1.jpg" alt="t1">
                                                                                                            </div>
                                                                                                            <div class="testimonial-text">
                                                                                                                <p>
                                                                                                                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                                                                                                    Lorem ipsum dolor sit amet, consectetur..."<br>
                                                                                                                    <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                                                                            <div class="testimonial-image">
                                                                                                                <img src="assets/img/testimonials/2.jpg" alt="t2">
                                                                                                            </div>
                                                                                                            <div class="testimonial-text">
                                                                                                                <p>
                                                                                                                    "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                                                                                                    ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                                                                                                    lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                                                                                                    <a href="#">Minim Veniam, nostrud.com</a>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                                                                                                            <div class="testimonial-image">
                                                                                                                <img src="assets/img/testimonials/3.jpg" alt="t3">
                                                                                                            </div>
                                                                                                            <div class="testimonial-text">
                                                                                                                <p>
                                                                                                                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                                                                                                    Lorem ipsum dolor sit amet, consectetur..."<br>
                                                                                                                    <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div role="tabpanel" class="tab-pane fade" id="tab4">
                                                                                                            <div class="testimonial-image">
                                                                                                                <img src="assets/img/testimonials/4.jpg" alt="t4">
                                                                                                            </div>
                                                                                                            <div class="testimonial-text">
                                                                                                                <p>
                                                                                                                    "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                                                                                                    ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                                                                                                    lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                                                                                                    <a href="#">Minim Veniam, nostrud.com</a>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                     Nav tabs 
                                                                                                    <ul class="nav nav-tabs" role="tablist">
                                                                                                        <li role="presentation" class="active">
                                                                                                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                                                                                                        </li>
                                                                                                        <li role="presentation">
                                                                                                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                                                                                                        </li>
                                                                                                        <li role="presentation">
                                                                                                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                                                                                                        </li>
                                                                                                        <li role="presentation">
                                                                                                            <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>-->
                                    </section>
                                    <!-- / Testimonial -->
                                    <!-- Latest Blog -->
<!--  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>Originnal insta feed, good for the index page</h2>
            <div class="row">
               single latest blog 
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                                  
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BmyYzwQB7Cn/?utm_source=ig_embed&amp;utm_campaign=embed_loading_state_control" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BmyYzwQB7Cn/?utm_source=ig_embed&amp;utm_campaign=embed_loading_state_control" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Inovora Technologies (@inovoratech)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-08-22T16:08:02+00:00">Aug 22, 2018 at 9:08am PDT</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>                       
                  
                  </div>
                </div>
              <div class="col-md-4 col-sm-4">
                  <div class="aa-latest-blog-single">
                                  
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BmxTE9SBLq3/?utm_source=ig_embed&amp;utm_campaign=embed_loading_state_control" data-instgrm-version="9" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BmxTE9SBLq3/?utm_source=ig_embed&amp;utm_campaign=embed_loading_state_control" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">It&#39;s time to secure your dream job... - Domain name (A selection from .com, .net, .org, .lk*) - Web hosting - Unlimited Bandwidth - Responsive Website - Single page website - Email account - As unique features projects/assignments &amp; blog posts area can be included - Social media linking All of these for just LKR 15,000/= (USD $100)*. Contact us on +94-761-303538 to discuss further details on your website. *Conditions applied (This offer is only for a limited time period) . . . . . . . . . . . #affordablesolutions #webdeveloper #webdevelopment #softwaresolutions #codersofinstagram #onlinemarketing #seo #analytics #businessdevelopment #affordablesolutions #followforfollowback #followforlike #inovoratech</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/inovoratech/?utm_source=ig_embed&amp;utm_campaign=embed_loading_state_control" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Inovora Technologies</a> (@inovoratech) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-08-22T05:58:43+00:00">Aug 21, 2018 at 10:58pm PDT</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
                  
                  
                </div>
              </div>
              
               single latest blog 
              
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>-->
  <!-- / Latest Blog -->
                                    <!-- Client Brand -->
<!--                                    <section id="aa-client-brand">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="aa-client-brand-area">
                                                        <ul class="aa-client-brand-slider">
                                                            <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                                                            <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>-->
                                    <!-- / Client Brand -->

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
                                    
                                    <!--testimonial-->
                                    <!-- Javascript -->
<!--                                    <script src="assets/js/jquery-1.11.1.min.js"></script>
                                    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                                    <script src="assets/js/jquery.backstretch.min.js"></script>
                                    <script src="assets/js/scripts.js"></script>-->

                                    </body>
                                    </html>