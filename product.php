<?php
require 'database/dbConnect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/ico" href="img/favconlogo.jpg"/>
        <title>Dux Tela | Products</title>

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
        <!-- Start header section -->
        <?php
        include("header.php");
        ?>
        <!-- / menu -->  

        <!-- catg header banner section -->
        <section id="aa-catg-head-banner">
            <img src="img/Banners/productsBanner.jpg" alt="fashion img">
            <div class="aa-catg-head-banner-area">
                <div class="container">
                    <div class="aa-catg-head-banner-content">
                        <h2>Products</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>         
                            <li class="active">Products</li>
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
                            $result = $db->query("SELECT * FROM items") or die($db->error());
                            ?>

                            <div class="aa-product-catg-body">
                                <ul class="aa-product-catg">
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                 <form action="addtoCart.php" method="POST">
                                                <a class="aa-product-img" href="getProduct.php?itemid=<?php echo $row['itemID']; ?>&pagelocation=product"><img src="img/<?php echo $row['itemCategory']; ?>/<?php echo $row['itemimg1']; ?>" alt="<?php echo $row['itemimg1']; ?>"></a>
<!--                                                <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>-->
                                                <input type="hidden" name="pagelocation" value="<?php echo 'product'; ?>" />
                                                <a class="aa-add-card-btn"><span class="fa fa-shopping-cart"></span><input type="hidden" name="addtocart" value="add"/><button type="submit" style="background: black; border: none">Add To Cart</button></a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#"><?php echo $row['itemName']; ?></a></h4>
                      <span class="aa-product-price">Rs.<?php echo $row['itemPrice']; ?></span>
                      <p class="aa-product-descrip"><?php echo $row['itemDescription']; ?></p>
                      <input type="hidden" name="itemid" value="<?php echo $row['itemID'];?>" />
                      <input type="hidden" name="itemqty" value="1" />
                      <input type="hidden" name="itemcost" value="<?php echo $row['itemPrice']; ?>" />
                      <input type="hidden" name="userid" value="<?php echo $_SESSION['userID']; ?>" />
                      <input type="hidden" name="pagelocation" value="<?php echo 'product'; ?>" />
                    <a class="aa-add-card-btn"><span class="fa fa-shopping-cart"></span><input type="hidden" name="addtocart" value="add"/><button type="submit" style="background: black; border: none">Add To Cart</button></a>
                                                </figcaption>
                                                </form>
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

