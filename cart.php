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
        <title>Dux Tela | Cart Page</title>

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
        <!-- Start header section -->
        <?php
        include("header.php");
        ?>

        <!-- catg header banner section -->
        <section id="aa-catg-head-banner">
            <img src="img/Banners/CartBanner.jpg" alt="Cart Banner">
            <div class="aa-catg-head-banner-area">
                <div class="container">
                    <div class="aa-catg-head-banner-content">
                        <h2>My Cart</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>                   
                            <li class="active">Cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- / catg header banner section -->

        <!-- Cart view section -->
        <section id="cart-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-view-area">
                            <?php
                            $user = $_SESSION['userID'];
                            $result = $db->query("SELECT * FROM cart c join items i on (c.itemID=i.itemID) where user = '$user'") or die($db->error());
                            $subtotal = 0;
                            ?>
                            <?php
                            if ($result->num_rows == 0) {
                                echo '<h2 align="center" ><span> Cart Empty</span></h2><br><div align="center"><a href="index.php" class="aa-cart-view-btn">Shop Now</a></div>';
                            } else {
                                ?>
                                <div class="cart-view-table">


<!--                                    <form action="updateCart.php" method="GET">-->
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th>Product</th>
                                                        <th>Size</th>
                                                        <th>Price (LKR)</th>
                                                        <th>Quantity</th>
                                                        <th>Total (LKR)</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                    <tr>
<form action="updateCart.php" method="GET">
                       <!--<input type="hidden" name="item" value="<?php echo $row['itemID']; ?>" />-->
                                                                <td style="padding: 0px"><a class="remove" href="removeCartItem.php?itemid=<?php echo $row['itemID']; ?>&size=<?php echo $row['size']; ?>&pagelocation=cart" title="Remove Product"><fa class="fa fa-close"></fa></a></td>
                                                                <!--<td><a class="remove" href="removeCartItem.php?itemID=<?php echo $row['itemID']; ?>"><button style="border:0px solid black; background-color: transparent;" type="submit" name="cart" value="removecart"  title="Remove Product"><fa class="fa fa-close"></fa></button></a></td>-->
                                                                <!--<td><button style="border:1px solid black; background-color: transparent;"class="remove" type="submit" name="cart" value="removecart"><fa class="fa fa-close"></fa></button></td>-->
                                                                <td><a href="#"><img src="img/<?php echo $row['itemCategory']; ?>/<?php echo $row['itemimg1']; ?>" alt="img"></a></td>
                                                                <td><a class="aa-cart-title"><?php echo $row['itemName']; ?></a></td>
                                                                <td><?php echo $row['size']; ?></td>
                                                                <td><?php echo $row['cost']; ?></td>
                                                <td><input class="aa-cart-quantity" type="number" name="itemquantity" value="<?php echo $row['quantity']; ?>" min="1"></td>
                                                                <!--<td><?php echo $row['quantity']; ?></td>-->
                                                

        <!--<input type="hidden" name="itemquantity" value="" />-->
                                                        <input type="hidden" name="itemid" value="<?php echo $row['itemID']; ?>" />
                                                        <input type="hidden" name="size" value="<?php echo $row['size']; ?>" />
                                                        <input type="hidden" name="pagelocation" value="<?php echo 'cart'; ?>" />
                                                        <?php
                                                        $total = $row['quantity'] * $row['cost'];

                                                        $subtotal += $total;
                                                        ?>
                                                        <td><?php echo $total; ?></td>
                                                        <td colspan="6" class="aa-cart-view-bottom" style="padding: 0px">
                                                            <input style="padding: 3px" class="aa-cart-view-btn" type="submit" value="Update"> 
                                                        </td>
                                                        </form>
                                                    </tr>
                                                        <?php
                                                    }
                                                    ?> 
<!--                                                    <tr>
                                                        <td colspan="6" class="aa-cart-view-bottom">
                                                            <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                                                        </td>
                                                    </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>




                                    <!-- Cart Total view -->
                                    <div class="cart-view-total">
                                        <h4>Cart Totals</h4>
                                        <table class="aa-totals-table">
                                            <tbody>
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td>LKR <?php echo $subtotal; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td>LKR <?php echo $subtotal; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="checkout.php" class="aa-cart-view-btn">Proceed to Checkout</a>
                                    </div>
                                </div>
<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Cart view section -->


        <!-- Subscribe section -->
<!--        <section id="aa-subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-subscribe-area">

                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- / Subscribe section -->

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