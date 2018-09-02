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
        <title>Dux Tela | About Us</title>

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
      <img src="img/Banners/AboutBanner.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>About Us</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li class="active">About Us</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- Blog Archive -->
  <section id="aa-blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-archive-area">
                <!-- Blog details -->
                <div class="aa-blog-content aa-blog-details">
                  <article class="aa-blog-content-single">  
                    <h3 style="text-align: center;"><i>"A Good Business can Change the World"</i></h3>
                      <blockquote>
                         <h1>About Us</h1>
                      </blockquote>      
                      
                    <!--<h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, praesentium?</a></h2>-->
                    
<!--                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/fashion/3.jpg" alt="fashion img"></a>
                    </figure>-->
                    <p>We are a designer brand producing exclusive and affordable women’s wear and men’s gear in limited number of pieces where you can be unique in what you wear. We design our cloths for all your plans.</p>
                    <p>Its was a simple idea of two new Boomers to make it easier to find casual wear and commitment to do more. Since the time we have made 10,000+ Men and women Smarter, prettier and elegant individually through our E-commerce based stores and still growing.</p><br>
                    <br>
                    <blockquote>
                         <h2>Our Vision</h2>
                      </blockquote>
                    
                    <p>Our primary goal is to be the leader in the premium casual wear market as a life style brand. We are dedicated to achieving this ambition in the years to come.</p>
                    <br><br>
                    <blockquote>
                         <h2>Our Mission</h2>
                      </blockquote>
                    
                    <p>Sharing our vision of casual life style elegance, and our optimism and faith in the future, is the purpose of our business. It is the pride and passion of each person who works for DUX-TELA.
We aim to create opportunities for women, teens and young adults, as well as our own employees, so that they can reach toward bigger goals and fulfill their greatest potential.
</p>
                    
                    
              
            </div>
      </div>
    </div>
  </section>
  

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