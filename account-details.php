<?php
session_start();
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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Dux Tela | Account Details</title>

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
                        <h2>Account Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>                   
                            <li class="active">Account Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- / catg header banner section -->
        <section id="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkout-area">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkout-left">
                                            <div class="panel-group" id="accordion">
                                                <!-- Coupon section -->
                                                <div class="panel panel-default aa-checkout-coupon">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                Profile Information
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input type="text" placeholder="Coupon Code" class="aa-coupon-code">
                                                                    </div> 
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input type="text" placeholder="Coupon Code" class="aa-coupon-code">
                                                                    </div> 
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            <input type="submit" value="Apply Coupon" class="aa-browse-btn"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default aa-checkout-coupon">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                Order Details
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div>Sorry, there are no orders to display</div>
                                                                    <div>Please click on the below button to view orders</div>
                                                                    <input type="submit" value="Apply Coupon" class="aa-browse-btn"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Billing Details -->
                                                <div class="panel panel-default aa-checkout-billaddress">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                Billing Details
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse">
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
                                                </div>
                                                <!-- Shipping Address -->
                                                <div class="panel panel-default aa-checkout-billaddress">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                Shippping Address
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse">
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
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <textarea cols="8" rows="3">Special Notes</textarea>
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
