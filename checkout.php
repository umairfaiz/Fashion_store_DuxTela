<?php
session_start();
require 'database/dbConnect.php';
?>
<?php 
    if (!isset($_SESSION['userID'])){
        header("location: account.php");
    }
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
            <img src="img/Banners/CheckoutBanner.jpg" alt="Checkout Banner">
            <div class="aa-catg-head-banner-area">
                <div class="container">
                    <div class="aa-catg-head-banner-content">
                        <h2>Checkout</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>                   
                            <li class="active">Checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- / catg header banner section -->

        <!-- Cart view section -->
        <section id="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkout-area">
                            <form action="place-order.php" method="post">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="checkout-left">
                                            <div class="panel-group" id="accordion">
                                                <!-- Coupon section -->
                                                <div class="panel panel-default aa-checkout-coupon">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                Have a Coupon?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <input type="text" placeholder="Coupon Code" class="aa-coupon-code">
                                                            <input type="submit" value="Apply Coupon" class="aa-browse-btn" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Billing Details -->
                                                <!--                    <div class="panel panel-default aa-checkout-billaddress">
                                                                      <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                            Billing Details
                                                                          </a>
                                                                        </h4>
                                                                      </div>
                                                                      <div id="collapseThree" class="panel-collapse collapse in">
                                                                        <div class="panel-body">
                                                                          <div class="row">
                                                                            <div class="col-md-6">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <input type="text" placeholder="First Name*">
                                                                              </div>                             
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <input type="text" placeholder="Last Name*">
                                                                              </div>
                                                                            </div>
                                                                          </div> 
                                                                          <div class="row">
                                                                            <div class="col-md-12">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <input type="text" placeholder="Company name">
                                                                              </div>                             
                                                                            </div>                            
                                                                          </div>  
                                                                          <div class="row">
                                                                            <div class="col-md-6">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <input type="email" placeholder="Email Address*">
                                                                              </div>                             
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <input type="tel" placeholder="Phone*">
                                                                              </div>
                                                                            </div>
                                                                          </div> 
                                                                          <div class="row">
                                                                            <div class="col-md-12">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <textarea cols="8" rows="3">Address*</textarea>
                                                                              </div>                             
                                                                            </div>                            
                                                                          </div>   
                                                                          <div class="row">
                                                                            <div class="col-md-12">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <select>
                                                                                  <option value="0">Select Your Country</option>
                                                                                  <option value="1">Australia</option>
                                                                                  <option value="2">Afganistan</option>
                                                                                  <option value="3">Bangladesh</option>
                                                                                  <option value="4">Belgium</option>
                                                                                  <option value="5">Brazil</option>
                                                                                  <option value="6">Canada</option>
                                                                                  <option value="7">China</option>
                                                                                  <option value="8">Denmark</option>
                                                                                  <option value="9">Egypt</option>
                                                                                  <option value="10">India</option>
                                                                                  <option value="11">Iran</option>
                                                                                  <option value="12">Israel</option>
                                                                                  <option value="13">Mexico</option>
                                                                                  <option value="14">UAE</option>
                                                                                  <option value="15">UK</option>
                                                                                  <option value="16">USA</option>
                                                                                </select>
                                                                              </div>                             
                                                                            </div>                            
                                                                          </div>
                                                                          <div class="row">
                                                                            <div class="col-md-6">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <input type="text" placeholder="Appartment, Suite etc.">
                                                                              </div>                             
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <input type="text" placeholder="City / Town*">
                                                                              </div>
                                                                            </div>
                                                                          </div>   
                                                                          <div class="row">
                                                                            <div class="col-md-6">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <input type="text" placeholder="District*">
                                                                              </div>                             
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                              <div class="aa-checkout-single-bill">
                                                                                <input type="text" placeholder="Postcode / ZIP*">
                                                                              </div>
                                                                            </div>
                                                                          </div>                                    
                                                                        </div>
                                                                      </div>
                                                                    </div>-->
                                                <!-- Shipping Address -->
                                                <div class="panel panel-default aa-checkout-billaddress">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                Shippping Address
                                                            </a>
                                                        </h4>
                                                    </div>        
                                                    <div id="collapseFour" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input type="text" placeholder="First Name*" name="firstname">
                                                                    </div>                             
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input type="text" placeholder="Last Name*" name="lastname">
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <!--                          <div class="row">
                                                                                        <div class="col-md-12">
                                                                                          <div class="aa-checkout-single-bill">
                                                                                            <input type="text" placeholder="Company name">
                                                                                          </div>                             
                                                                                        </div>                            
                                                                                      </div>  -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input type="email" placeholder="Email Address*" name="email" required>
                                                                    </div>                             
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input type="tel" placeholder="Phone*" name="phone" required>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <textarea cols="8" rows="3" placeholder="Address*" name="address" required></textarea>
                                                                    </div>                             
                                                                </div>                            
                                                            </div>   
                                                            <!--                          <div class="row">
                                                                                        <div class="col-md-12">
                                                                                          <div class="aa-checkout-single-bill">
                                                                                            <select>
                                                                                              <option value="0">Select Your Country</option>
                                                                                              <option value="1">Australia</option>
                                                                                              <option value="2">Afganistan</option>
                                                                                              <option value="3">Bangladesh</option>
                                                                                              <option value="4">Belgium</option>
                                                                                              <option value="5">Brazil</option>
                                                                                              <option value="6">Canada</option>
                                                                                              <option value="7">China</option>
                                                                                              <option value="8">Denmark</option>
                                                                                              <option value="9">Egypt</option>
                                                                                              <option value="10">India</option>
                                                                                              <option value="11">Iran</option>
                                                                                              <option value="12">Israel</option>
                                                                                              <option value="13">Mexico</option>
                                                                                              <option value="14">UAE</option>
                                                                                              <option value="15">UK</option>
                                                                                              <option value="16">USA</option>
                                                                                            </select>
                                                                                          </div>                             
                                                                                        </div>                            
                                                                                      </div>-->
                                                            <div class="row">
                                                                <?php
                                                                $coderates = $db->query("SELECT * FROM `codrates` WHERE available='yes'") or die($db->error());
                                                                ?>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input type="text" placeholder="Appartment, Suite etc." name="apartment">
                                                                    </div>                             
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                      <!--<input type="text" placeholder="City / Town*" required>-->
                                                                        <select id="deliverySelect" onchange="deliveryFunction()" style="padding:10px 10px 7px 10px;" name="city" required>
                                                                            <option >Select your City / Town*</option>
                                                                            <?php
                                                                            while ($codrate = mysqli_fetch_array($coderates)) {
                                                                                ?>
                                                                                <option value="<?php echo $codrate['price']; ?>"><?php echo $codrate['city']; ?></option>
                                                                                
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                                
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>   
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input type="text" placeholder="District / Province*" name="district" required>
                                                                    </div>                             
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                            <input type="text" placeholder="Postcode / ZIP*" name="postcode" required>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <textarea cols="8" rows="3" placeholder="Special Notes" name="notes"></textarea>
                                                                    </div>                             
                                                                </div>                            
                                                            </div>              
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="checkout-right">
                                            <h4>Order Summary</h4>
                                            <?php
                                            $subtotal = 0;
                                            $count=0;
                                            $arr_itemid=[];
                                            $arr_cost=[];
                                            $arr_quantity=[];
                                            $userid = $_SESSION['userID'];
                                            $result = $db->query("SELECT * FROM cart c join items i on (c.itemID=i.itemID) where user ='$userid'") or die($db->error());
                                            ?>
                                            <div class="aa-order-summary-area">
                                                <table class="table table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            $count+=1;
                                                            $itemid=$row['itemID'];
                                                            $cost=$row['cost'];
                                                            $qty=$row['quantity'];
                                                           
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row['itemName']; ?> -<strong><?php echo $row['size']; ?> </strong> x <strong><?php echo $row['quantity']; ?> </strong></td>
                                                                <td>LKR <?php echo $row['quantity'] * $row['cost']; ?> </td>
                                                                <input type="hidden" name="quantity" value="<?php echo $row['quantity']; ?>">
                                                                <input type="hidden" name="cost" value="<?php echo $row['cost']; ?>">
                                                                <input type="hidden" name="userID" value="<?php echo $_SESSION['userID']; ?>">
                                                                <input type="hidden" name="count" value="<?php echo $count; ?>">
                                                            </tr>
                                                            <?php
                                                            $stotal = $row['quantity'] * $row['cost'];
                                                            $subtotal += $stotal;
                                                            array_push($arr_itemid,$itemid);
                                                            array_push($arr_cost,$cost);
                                                            array_push($arr_quantity,$qty);
                                                            $itemString=  base64_encode(serialize($arr_itemid));
                                                            $costString=  base64_encode(serialize($arr_cost));
                                                            $qtyString=  base64_encode(serialize($arr_quantity));
                                                            
//                                                            $data=  unserialize($dataString);
//                                                            print_r($data);

                                                        }
                                                        ?>
                                                            <input type="hidden" name="itemID" value="<?php echo $itemString; ?>">
                                                            <input type="hidden" name="cost" value="<?php echo $costString; ?>">
                                                            <input type="hidden" name="quantity" value="<?php echo $qtyString; ?>">
                                                            
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Subtotal</th>
                                                            <td><?php echo $subtotal ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Delivery Charges</th>
                                                            <td id="deliverycharges">FREE</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total</th>
                                                            <td id="totalcharges"><?php echo $subtotal ?></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <h4>Payment Method</h4>
                                            <div class="aa-payment-method">                    
                                                <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios" checked> Cash on Delivery </label>
                                                <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" disabled> Via Paypal </label>
                                                <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
                                                <input type="submit" value="Place Order" class="aa-browse-btn">                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Cart view section -->

        <!-- footer -->  
        <?php
        include("footer.php");
        ?>


        <script>
            function deliveryFunction() {
                var x = document.getElementById("deliverySelect").value;
                var t = parseInt(x) + parseInt(<?php echo $subtotal ?>);
                document.getElementById("deliverycharges").innerHTML = x;
                document.getElementById("totalcharges").innerHTML = t;
            }
        </script>
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