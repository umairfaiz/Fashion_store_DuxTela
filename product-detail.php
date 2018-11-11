<?php
session_start();
require 'database/dbConnect.php';
$itemid = $db->escape_string($_REQUEST['itemid']);
$sql_viewproduct = $db->query("SELECT * FROM items WHERE itemID='$itemid'");
$product = $sql_viewproduct->fetch_assoc();
$sql_productsizes = $db->query("SELECT s.size from size s JOIN items_size i on (s.sizeID=i.sizeID) WHERE itemID='$itemid'");
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

        <script>
            var repeater;

            function imageZoom(imgID, resultID) {
                var img, lens, result, cx, cy;
                img = document.getElementById(imgID);
                result = document.getElementById(resultID);
                /*create lens:*/
                lens = document.createElement("DIV");
                lens.setAttribute("class", "img-zoom-lens");
                /*insert lens:*/
                img.parentElement.insertBefore(lens, img);
                /*calculate the ratio between result DIV and lens:*/
                cx = result.offsetWidth / lens.offsetWidth;
                cy = result.offsetHeight / lens.offsetHeight;
                /*set background properties for the result DIV:*/
                result.style.backgroundImage = "url('" + img.src + "')";
                result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
                /*execute a function when someone moves the cursor over the image, or the lens:*/
                lens.addEventListener("mousemove", moveLens);
                img.addEventListener("mousemove", moveLens);
                /*and also for touch screens:*/
                lens.addEventListener("touchmove", moveLens);
                img.addEventListener("touchmove", moveLens);
                function moveLens(e) {
                    var pos, x, y;
                    /*prevent any other actions that may occur when moving over the image:*/
                    e.preventDefault();
                    /*get the cursor's x and y positions:*/
                    pos = getCursorPos(e);
                    /*calculate the position of the lens:*/
                    x = pos.x - (lens.offsetWidth / 2);
                    y = pos.y - (lens.offsetHeight / 2);
                    /*prevent the lens from being positioned outside the image:*/
                    if (x > img.width - lens.offsetWidth) {
                        x = img.width - lens.offsetWidth;
                    }
                    if (x < 0) {
                        x = 0;
                    }
                    if (y > img.height - lens.offsetHeight) {
                        y = img.height - lens.offsetHeight;
                    }
                    if (y < 0) {
                        y = 0;
                    }
                    /*set the position of the lens:*/
                    lens.style.left = x + "px";
                    lens.style.top = y + "px";
                    /*display what the lens "sees":*/
                    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
                }
                function getCursorPos(e) {
                    var a, x = 0, y = 0;
                    e = e || window.event;
                    /*get the x and y positions of the image:*/
                    a = img.getBoundingClientRect();
                    /*calculate the cursor's x and y coordinates, relative to the image:*/
                    x = e.pageX - a.left;
                    y = e.pageY - a.top;
                    /*consider any page scrolling:*/
                    x = x - window.pageXOffset;
                    y = y - window.pageYOffset;
                    return {x: x, y: y};
                }
            }
//            function mouseOver() {
//                $(myresult).show();
//            }
//
//            function mouseOut() {
//                $(myresult).hide();
//            }
function show(id) {
    document.getElementById(id).style.visibility = "visible";
  }
  function hide(id) {
    document.getElementById(id).style.visibility = "hidden";
  }
        </script>

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
            <img src="img/Banners/ProductDetailBanner.jpg" alt="Product-Detail-Banner">
            <div class="aa-catg-head-banner-area">
                <div class="container">
                    <div class="aa-catg-head-banner-content">
                        <h2>Product Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>         
                            <li><a href="product.php">Product</a></li>
                            <li><a class="active">Details</a></li>
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
                                                    
                                                    <div class="simpleLens-big-image-container">
                                                     <div id="myresult" class="img-zoom-result"><h3>Zoomed View</h3></div>
                                                        
                                                        
                                                        <div class="img-zoom-container">
                                                            <!--<img id="myimage" onmouseover="mouseOver()" onmouseout="mouseOut()" src="img/women/Ella floral summer dress.png" width="250" height="300">-->
                                                            <img id="myimage" onMouseOver="show('myresult')" onMouseOut="hide('myresult')" src="img/<?php echo $product['itemCategory']; ?>/<?php echo $product['itemimg1']; ?>" alt="<?php echo $product['itemimg1']; ?>" width="250" height="300">
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                    if (isset($product['itemimg2'])){
                                                ?>
                                                <div class="simpleLens-thumbnails-container">
                                                    <a target="_blank" href="img/women/<?php echo $product['itemimg1'];?>">
                                                        <img src="img/view-slider/thumbnail/<?php echo $product['itemimg1'];?>">
                                                    </a>   
                                                    <a target="_blank" href="img/women/<?php echo $product['itemimg2'];?>">
                                                        <img src="img/view-slider/thumbnail/<?php echo $product['itemimg2'];?>">
                                                    </a>    
                                                </div>
                                                <?php 
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal view content -->
                                    
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <form action="addtoCart-productdetail.php" method="POST">
                                        <div class="aa-product-view-content">
                                            <h3><strong><?php echo $product['itemName']; ?></strong></h3><br>
                                            <div class="aa-price-block">
                                                <span class="aa-product-view-price">Price: <strong>LKR <?php echo $product['itemPrice']; ?></strong></span>
                                            </div>
                                            <br><p class="aa-product-avilability">Availability: <strong>In stock</strong></p>
                                            <span class="aa-product-avilability">Size</span>
                                            <div class="aa-prod-view-size">
                                                                
                                                    <select name="size">
                                                        <?php
                                                    while ($sizes = mysqli_fetch_array($sql_productsizes)) {
                                                        ?>
                                                        <option value="<?php echo $sizes['size'];?>"> <?php echo $sizes['size'];?></option>
                                                    <?php }?>
                                                    </select>
                                                
                                            </div>

                                            <div class="aa-prod-quantity">
                                                    <div><span class="aa-product-avilability">Quantity </span></div>
                                                    <input type="number" name="itemqty" value="1" min="1" max="10" required="required" >

                                            </div>
                                            <input type="hidden" name="itemid" value="<?php echo $product['itemID']; ?>" />
                                            <input type="hidden" name="itemcost" value="<?php echo $product['itemPrice']; ?>" />
                                            <input type="hidden" name="userid" value="<?php echo $_SESSION['userID']; ?>" />
                                            <input type="hidden" name="pagelocation" value="<?php echo 'product-detail'; ?>" />
                                            <div class="aa-prod-view-bottom">
                                                <button type="submit" class="aa-add-to-cart-btn" style="background: transparent;">Add To Cart</button>
                                            </div>
                                        </div>
                                            
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="aa-product-details-bottom">
                                <ul class="nav nav-tabs" id="myTab2">
                                    <li><a  data-toggle="tab">Description</a></li>            
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="description">
                                        <p><?php echo $product['itemDescription']; ?></p>
<!--                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!</li>
                                            <li>Lorem ipsum dolor sit amet.</li>
                                        </ul>-->
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
        <script>
        // Initiate zoom effect:
        imageZoom("myimage", "myresult");
        </script>
    </body>
</html>