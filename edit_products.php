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
    <title>Dux Tela | Edit products</title>
    
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
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
   <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                    </a>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-money"></i>LKR
                    </a>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>+94-70-270-6900</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                    <li><a href="admin_index.php">Home</a></li>
                  
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="admin_index.php">
                  <span class="fa fa-shirtsinbulk"></span>
                  <p>Dux<strong>Tela</strong> <span>Partner of your exclusive soul</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <!--<div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                </div>
              </div>-->
              <!-- / cart box -->
              <!-- search box -->
              <!--<div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>-->
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                                    <form method="POST" action="editProducts.php" enctype="multipart/form-data" >
                                        <!-- Modal view content -->
                                        <h2>Edit products</h2><br>
                                        <div class="col-md-6">
                                            <div class="aa-product-view-content">
                                                <div class="aa-prod-view-size">
                                                    <label >Product ID:</label><br/>
                                                    <input type="text" name="item_id"/><br/><br/>
                                                    <label >New Product name:</label><br/>
                                                    <input type="text" name="item_name" value="" class="form-control"/><br/><br/>
                                                    <label >New Product Units:</label><br/>
                                                    <input type="text" name="item_units" value="" class="form-control" /><br/><br/>
                                                    <label >New Product Discount: (%)</label><br/>
                                                    <input type="text" name="item_discount" value="" placeholder="Ex:- 10" class="form-control" /><br/><br/>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="aa-product-view-content">
                                                <div class="aa-prod-view-size">
                                                    <label >New Product Price: (Rs)</label><br/>
                                                    <input type="text" name="item_price" value="" placeholder="Ex:- 1500" class="form-control"/><br/><br/>
                                                    <label >New Product description:</label><br/>
                                                    <textarea name="textarea" cols="40" rows="5" placeholder="Product description" class="form-control"></textarea><br><br><br><br><br><br><br>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="aa-prod-view-bottom">
                                            
                                            <button type="submit"  name="submit" class="aa-add-to-cart-btn" >Save Edit</button>
                                            <a class="aa-add-to-cart-btn" href="CRD_products.php">Add new products</a>
                                            <a class="aa-add-to-cart-btn" href="admin_index.php"><fa class="fa fa-home"></fa> Home</a>
                                        </div>
                                    </form>  
                                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->
<section id="cart-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-view-area">
                            <div class="cart-view-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Product ID</th>
                                                    <th>Product</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Discount</th>                                                   
                                                    <th>Units</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $result = $db->query("SELECT * FROM items") or die($db->error());
                                            ?>
                                            <?php
                                                while( $row = mysqli_fetch_array($result) ){
                                            ?>
                                            
                                            <tbody>
                                                <form action="deleteProduct.php" method="post" id="addform<?php echo $row['itemID']; ?>">
                                                <tr>
                                                    <td><button class="remove"  title="Delete"><fa class="fa fa-close"></fa></button></td>
                                                    <!--<td><button title="Edit"><fa class="fa fa-edit"></fa></button></td>-->
                                                    <td><?php echo $row['itemID']; ?></td>
                                                    <td><img src="product_img/<?php echo $row['itemCategory']; ?>/<?php echo $row['itemimg1']; ?>" alt="product img"></td>
                                                    <td><?php echo $row['itemName']; ?></td>
                                                    <td><?php echo $row['itemCategory']; ?></td>
                                                    <td><?php echo $row['itemDescription']; ?></td>
                                                    <td><?php echo $row['itemPrice']; ?></td>
                                                    <td><?php echo $row['itemDiscount']; ?></td>
                                                    <td><?php echo $row['itemUnits']; ?></td>
                                                    <input type="hidden" name="remove_item" value="<?php echo $row['itemID']; ?>"/>
                                                </tr>
                                                </form>
                                            </tbody>
                                                <?php
                                                }
                                                ?>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <!-- footer -->  
   <footer id="aa-footer">
    <!-- footer bottom -->
    
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p><span class="fa fa-copyright"> 2017, Duxtela | <a href="http://www.facebook.com/inovoratech">Inovora Technologies</a></span></p>
            <div class="aa-footer-payment">
              
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


    
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
