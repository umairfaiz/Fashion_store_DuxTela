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
                        <h2>Size Chart</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- / catg header banner section -->

        <!-- Cart view section -->
        <section id="size-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="size-view-area">
                            
                                <div class="size-view-table">
                                    <!-- size Total view -->
                                    <div class="size-view-total">
                                        <h4>Women's Size Chart</h4>
                                        <table class="aa-totals-table">
                                            <tbody>
                                                <tr>
                                                    <th></th>
                                                    <th>XS</th>
                                                    <th>S</th>
                                                    <th>M</th>
                                                    <th>L</th>
                                                </tr>
                                                <tr>
                                                    <th>Bust</th>
                                                    <th>34 inches</th>
                                                    <th>36 inches</th>
                                                    <th>38 inches</th>
                                                    <th>40 inches</th>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>Waist</th>
                                                    <th>29 inches</th>
                                                    <th>31 inches</th>
                                                    <th>33 inches</th>
                                                    <th>35 inches</th>                                                    
                                                </tr>
                                                <tr>
                                                    <th>Hip</th>
                                                    <th>36 inches</th>
                                                    <th>38 inches</th>
                                                    <th>40 inches</th>
                                                    <th>42 inches</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="size-view-total">
                                        <h4>Men's Size Chart</h4>
                                        <table class="aa-totals-table">
                                            <tbody>
                                                <tr>
                                                    <th></th>
                                                    <th>Length</th>
                                                    <th>Width</th>
                                                </tr>
                                                <tr>
                                                    <th>XXS</th>
                                                    <th>24 inches</th>
                                                    <th>17 inches</th>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>XS</th>
                                                    <th>25 inches</th>
                                                    <th>18 inches</th>                                                   
                                                </tr>
                                                <tr>
                                                    <th>S</th>
                                                    <th>26 inches</th>
                                                    <th>19 inches</th>
                                                </tr>
                                                <tr>
                                                    <th>M</th>
                                                    <th>27 inches</th>
                                                    <th>20 inches</th>
                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>28 inches</th>
                                                    <th>21 inches</th>
                                                </tr>
                                                <tr>
                                                    <th>XL</th>
                                                    <th>29 inches</th>
                                                    <th>22 inches</th>
                                                </tr>
                                                <tr>
                                                    <th>XXL</th>
                                                    <th>30 inches</th>
                                                    <th>23 inches</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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