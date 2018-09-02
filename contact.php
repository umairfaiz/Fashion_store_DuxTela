<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="shortcut icon" type="image/ico" href="img/favconlogo.jpg"/>
    <title>Dux Tela | Contact</title>
    
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
  <?php
  if (isset($_POST['send_mail'])) {
      $to = 'info@duxtela.com'; //info@duxtela
      $subject = 'General Inquiry';
      $from = "From: " . $_REQUEST['email']."\n\n";
      $msg = $from . $_REQUEST['message'];
      $headers = array("From: Duxtela.com",
            "Reply-To: ".$to,
            "X-Mailer: PHP/" . PHP_VERSION
        );
      $msg = wordwrap($msg, 70);
      mail($to, $subject, $msg); //,implode("\r\n",$headers)
      echo 'Email Sent';
  }
  ?>
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
      <img src="img/Banners/MenBanner.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Contact</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
          <li class="active">Contact</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
<!--           <div class="aa-contact-top">
             <h2>We are wating to assist you..</h2>
             <p>Feel free to ask anything and everything.</p>
           </div>-->
           <!-- contact map -->
           
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                     <form class="comments-form contact-form" method="POST" action="contact.php">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                            <input type="text" name="name" placeholder="Your Name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                      </div>
                    </div>
<!--                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Subject" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Company" class="form-control">
                        </div>
                      </div>
                    </div>                  -->
                     
                    <div class="form-group">                        
                        <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                    </div>
                       <button class="aa-secondary-btn" name="send_mail">Send</button>
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>Duxtela</h4>
                     <p>Feel free to ask us anything and everything. We are wating to assist you.. </p>
                     <p><span class="fa fa-phone"></span>+94-70-270-6900</p>
                     <p><span class="fa fa-envelope"></span>Email: info@duxtela.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
              <a href="https://www.fb.com"><i class="fa fa-facebook-square"  style="font-size:48px;color:blue;"></i><h3>Like us on Facebook </h3> </a>
           
            
          </div>
        </div>
      </div>
    </div>
  </section>
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