<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
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
        <script>
            // This function is called when someone finishes with the Login
            // Button.  See the onlogin handler attached to it in the sample
            // code below.

            window.fbAsyncInit = function () {
                FB.init({
                    appId: '2051748631728164',
                    cookie: true,
                    xfbml: true,
                    version: 'v2.12'
                });

                FB.AppEvents.logPageView();

                FB.getLoginStatus(function (response) {
//                    statusChangeCallback(response);
                        if (response.status === 'connected') {
		    		document.getElementById('status').innerHTML = 'We are connected.';
		    		document.getElementById('login').style.visibility = 'hidden';
		    	} else if (response.status === 'not_authorized') {
		    		document.getElementById('status').innerHTML = 'We are not logged in.';
		    	} else {
		    		document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
		    	}
                });

            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            
            
            // login with facebook with extra permissions
		function login() {
			FB.login(function(response) {
				if (response.status === 'connected') {
		    		document.getElementById('status').innerHTML = 'We are connected.';
		    		document.getElementById('login').style.visibility = 'hidden';
                                
		    	} else if (response.status === 'not_authorized') {
		    		document.getElementById('status').innerHTML = 'We are not logged in.'
		    	} else {
		    		document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
		    	}
			}, {scope: 'email'});
		}
		
		// getting basic user info
		function getInfo() {
			FB.api('/me', 'GET', {locale: 'en_US', fields: 'first_name,last_name,name,email,id'}, function(response) {
				document.getElementById('status').innerHTML = response.id;
                                console.log(response.name);
                                
                                console.log(response.$user['email']);
                                console.log(response.first_name)
			});
		}
        </script>
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
                                        <li><a href="account">My Account</a></li>
                                        <li class="hidden-xs"><a href="wishlist">Wishlist</a></li>
                                        <li class="hidden-xs"><a href="cart">My Cart</a></li>
                                        <li class="hidden-xs"><a href="checkout">Checkout</a></li>
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
                                    <a href="index.php">
                                        <span class="fa fa-shirtsinbulk"></span>
                                        <p>Dux<strong>Tela</strong> <span>Partner of your exclusive soul</span></p>
                                    </a>
                                    <!-- img based logo -->
                                    <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                                </div>
                                
                                <div id="status"> </div>
                                
                                <button onclick="getInfo()">Get Info</button>
                                <button onclick="login()" >Login</button>
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
        <section id="menu">
            <div class="container">
                <div class="menu-area">
                    <!-- Navbar -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>          
                        </div>
                        <div class="navbar-collapse collapse">
                            <!-- Left nav -->
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="admin_index.php">Men <span class="caret"></span></a>
                                    <ul class="dropdown-menu">  
                                        <li><a href="#">Tshirt<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Polo</a></li>
                                                <li><a href="#">Round neck</a></li>
                                                <li><a href="#">Hoodies</a></li>                                      
                                            </ul>
                                        </li>
                                        <li><a href="#">Shirts<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Formal</a></li>
                                                <li><a href="#">Standard</a></li>                                           
                                            </ul>

                                        </li>


                                    </ul>
                                </li>
                                <li><a href="#">Women <span class="caret"></span></a>
                                    <ul class="dropdown-menu">  

                                        <li><a href="#">Trousers</a></li>    
                                        <li><a href="#">Sports</a></li>             
                                        <li><a href="#">Sarees</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">And more.. <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Sleep Wear</a></li>
                                                <li><a href="#">And more.. <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">

                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Polo T-Shirts</a></li>
                                                        <li><a href="#">SKirts</a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Tops</a></li>                      
                                                    </ul>
                                                </li>                   
                                            </ul>
                                        </li>
                                    </ul>
                                </li>


                                <li><a href="popupCust.php"><button class="button">Customization</button></a></li>
                                <li><a href="#">All Products </a>
                               <!--<li><a href="#">Digital <span class="caret"></span></a>
                                  <ul class="dropdown-menu">                
                                    <li><a href="#">Camera</a></li>
                                    <li><a href="#">Mobile</a></li>       
                                    <li><a href="#">Tablet</a></li>
                                    <li><a href="#">Laptop</a></li>                                                
                                    <li><a href="#">Accesories</a></li>                
                                  </ul>
                                </li>
                                <li><a href="#">Furniture</a></li>            
                                <li><a href="blog-archive.html">Blog <span class="caret"></span></a>
                                  <ul class="dropdown-menu">                
                                    <li><a href="blog-archive.html">Blog Style 1</a></li>
                                    <li><a href="blog-archive-2.html">Blog Style 2</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>                
                                  </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#">Pages <span class="caret"></span></a>
                                  <ul class="dropdown-menu">                
                                    <li><a href="product.html">Shop Page</a></li>
                                    <li><a href="product-detail.html">Shop Single</a></li>                
                                    <li><a href="404.html">404 Page</a></li>                
                                  </ul>
                                </li>
                              </ul>
                            </div><!--/.nav-collapse -->
                                    </div>
                                    </div>       
                                    </div>
                                    </section>
                                    <!-- / menu -->

                                    <!-- Start slider -->
                                    <section id="aa-slider">
                                        <div class="aa-slider-area">
                                            <div id="sequence" class="seq">
                                                <ul class="seq-canvas">
                                                    <!-- single slide item -->
                                                    <li>
                                                        <div class="seq-model">
                                                            <img data-seq src="img/slider/1.jpg" alt="Men slide img" />
                                                        </div>
                                                        <div class="seq-title">
                                                            <span data-seq>Save Up to 75% Off</span>                
                                                            <h2 data-seq>Men Collection</h2>                
                                                            <p data-seq>klanfklanfnklanfklanklfn alfnlanfkla</p>
                                                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                                        </div>
                                                    </li>
                                                    <!-- single slide item -->
                                                    <li>
                                                        <div class="seq-model">
                                                            <img data-seq src="img/slider/2.jpg" alt="Wristwatch slide img" />
                                                        </div>
                                                        <div class="seq-title">
                                                            <span data-seq>Save Up to 40% Off</span>                
                                                            <h2 data-seq>Customized Collection</h2>                
                                                            <p data-seq>sdnksndklnl aflanfln</p>
                                                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                                        </div>
                                                    </li>
                                                    <!-- single slide item -->
                                                    <li>
                                                        <div class="seq-model">
                                                            <img data-seq src="img/slider/3.jpg" alt="Women Jeans slide img" />
                                                        </div>
                                                        <div class="seq-title">
                                                            <span data-seq>Save Up to 75% Off</span>                
                                                            <h2 data-seq>Jeans Collection</h2>                
                                                            <p data-seq>nfklanlf lnfaf.</p>
                                                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                                        </div>
                                                    </li>
                                                    <!-- single slide item -->           
                                                    <li>
                                                        <div class="seq-model">
                                                            <img data-seq src="img/slider/4.jpg" alt="Shoes slide img" />
                                                        </div>
                                                        <div class="seq-title">
                                                            <span data-seq>Save Up to 75% Off</span>                
                                                            <h2 data-seq>Exclusive Shirts</h2>                
                                                            <p data-seq>snkln nflanf anfnafpa </p>
                                                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                                        </div>
                                                    </li>
                                                    <!-- single slide item -->  
                                                    <li>
                                                        <div class="seq-model">
                                                            <img data-seq src="img/slider/5.jpg" alt="Male Female slide img" />
                                                        </div>
                                                        <div class="seq-title">
                                                            <span data-seq>Save Up to 50% Off</span>                
                                                            <h2 data-seq>Best Collection</h2>                
                                                            <p data-seq>sklsnfklnf andklandklajwpo nnafpojaf</p>
                                                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                                        </div>
                                                    </li>                   
                                                </ul>
                                                <!-- slider navigation btn -->
                                                <!--
                                                        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                                                          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                                                          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                                                        </fieldset>
                                                -->
                                            </div>
                                        </div>
                                    </section>
                                    <!-- / slider -->
                                    <!-- Start Promo section -->
                                    <section id="aa-promo">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="aa-promo-area">
                                                        <div class="row">
                                                            <!-- promo left -->
                                                            <div class="col-md-5 no-padding">                
                                                                <div class="aa-promo-left">
                                                                    <div class="aa-promo-banner">                    
                                                                        <img src="img/promo-banner-1.jpg" alt="img">                    
                                                                        <div class="aa-prom-content">
                                                                            <span>75% Off</span>
                                                                            <h4><a href="#">For Women</a></h4>                      
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- promo right -->
                                                            <div class="col-md-7 no-padding">
                                                                <div class="aa-promo-right">
                                                                    <div class="aa-single-promo-right">
                                                                        <div class="aa-promo-banner">                      
                                                                            <img src="img/promo-banner-3.jpg" alt="img">                      
                                                                            <div class="aa-prom-content">
                                                                                <span>Exclusive Item</span>
                                                                                <h4><a href="#">For Men</a></h4>                        
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="aa-single-promo-right">
                                                                        <div class="aa-promo-banner">                      
                                                                            <img src="img/promo-banner-2.jpg" alt="img">                      
                                                                            <div class="aa-prom-content">
                                                                                <span>Sale Off</span>
                                                                                <h4><a href="#">On Shoes</a></h4>                        
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="aa-single-promo-right">
                                                                        <div class="aa-promo-banner">                      
                                                                            <img src="img/promo-banner-4.jpg" alt="img">                      
                                                                            <div class="aa-prom-content">
                                                                                <span>New Arrivals</span>
                                                                                <h4><a href="#">For Kids</a></h4>                        
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="aa-single-promo-right">
                                                                        <div class="aa-promo-banner">                      
                                                                            <img src="img/promo-banner-5.jpg" alt="img">                      
                                                                            <div class="aa-prom-content">
                                                                                <span>25% Off</span>
                                                                                <h4><a href="#">For Bags</a></h4>                        
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
                                    </section>
                                    <!-- / Promo section -->
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
                                                                    <li><a href="#sports" data-toggle="tab">Sports</a></li>
                                                                    <li><a href="#customized" data-toggle="tab">Customized</a></li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content">
                                                                    <!-- Start men product category -->
                                                                    <div class="tab-pane fade in active" id="men">
                                                                        <ul class="aa-product-catg">
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                        
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                                <!-- product badge -->
                                                                                <!-- <span class="aa-badge aa-sale" href="#">SALE!</span>-->
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                         
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                         
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                          
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-5.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                          
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-6.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                          
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                          
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                         
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                                <!-- product badge -->
                                                                            </li>                        
                                                                        </ul>
                                                                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-arrow-right"></span></a>
                                                                    </div>
                                                                    <!-- / men product category -->
                                                                    <!-- start women product category -->
                                                                    <div class="tab-pane fade" id="women">
                                                                        <ul class="aa-product-catg">
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                         
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>

                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                         
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                         
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                          
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/women/girl-5.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>

                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/women/girl-6.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                          
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/women/girl-7.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                          
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>
                                                                            <!-- start single product item -->
                                                                            <li>
                                                                                <figure>
                                                                                    <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                                                                                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                                    <figcaption>
                                                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                                                        <span class="aa-product-price">$45.50</span>
                                                                                    </figcaption>
                                                                                </figure>                         
                                                                                <div class="aa-product-hvr-content">
                                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                                                    <a href="product-detail.html" ><span class="fa fa-search"></span></a>                          
                                                                                </div>
                                                                            </li>                        
                                                                        </ul>
                                                                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-arrow-right"></span></a>
                                                                    </div>
                                                                    <!-- / women product category -->
                                                                    <!-- start sports product category -->
                                                                    <div class="tab-pane fade" id="sports">


                                                                    </div>
                                                                    <!-- / sports product category -->
                                                                    <!-- start electronic product category -->
                                                                    <div class="tab-pane fade" id="electronics">

                                                                        </ul>
                                                                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-arrow-right"></span></a>
                                                                    </div>
                                                                    <!-- / electronic product category -->
                                                                </div>
                                                                <!-- quick view modal -->                  
                                                                <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">                      
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                <div class="row">
                                                                                    <!-- Modal view slider -->
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
                                                                                    <!-- Modal view content -->
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
                                                                        </div><!-- /.modal-content -->
                                                                    </div><!-- /.modal-dialog -->
                                                                </div><!-- / quick view modal -->              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- / Products section -->
                                    <!-- banner section -->
                                    <!--<section id="aa-banner">
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
                                                                <h4>FREE SHIPPING</h4>
                                                                <P>Free shipping within Colombo limits</P>
                                                            </div>
                                                        </div>
                                                        <!-- single support -->
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="aa-support-single">
                                                                <span class="fa fa-clock-o"></span>
                                                                <h4>30 DAYS MONEY BACK</h4>
                                                                <P>anfklanf afiajfiaj ajiajfpa</P>
                                                            </div>
                                                        </div>
                                                        <!-- single support -->
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="aa-support-single">
                                                                <span class="fa fa-phone"></span>
                                                                <h4>SUPPORT 24/7</h4>
                                                                <P>24/7 support and inquiries through Facebook and Email</P>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- / Support section -->
                                    <!-- Testimonial -->
                                    <section id="aa-testimonial">  
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="aa-testimonial-area">
                                                        <ul class="aa-testimonial-slider">
                                                            <!-- single slide -->
                                                            <li>
                                                                <div class="aa-testimonial-single">
                                                                    <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                                                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                                                    <p>shlshvsiv vhioshioao aaiaf oap fjpoaahviab aifap fhiaf pa.</p>
                                                                    <div class="aa-testimonial-info">
                                                                        <p>Gandhara</p>
                                                                        <span>CEO</span>
                                                                        <a href="#">Gandhara.com</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- single slide -->
                                                            <li>
                                                                <div class="aa-testimonial-single">
                                                                    <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                                                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                                                    <p>shlshvsiv vhioshioao aaiaf oap fjpoaahviab aifap fhiaf pa.</p>
                                                                    <div class="aa-testimonial-info">
                                                                        <p>Gandhara</p>
                                                                        <span>Designer</span>
                                                                        <a href="#">Dribble.com</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- single slide -->
                                                            <li>
                                                                <div class="aa-testimonial-single">
                                                                    <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                                                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                                                    <p>shlshvsiv vhioshioao aaiaf oap fjpoaahviab aifap fhiaf pa.</p>
                                                                    <div class="aa-testimonial-info">
                                                                        <p>BLUEWHALE</p>
                                                                        <span>CTO</span>
                                                                        <a href="#">BLUEWHALE.com</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- / Testimonial -->
                                    <!-- Client Brand -->
                                    <section id="aa-client-brand">
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
                                    </section>
                                    <!-- / Client Brand -->

                                    <!-- footer -->  
                                    <footer id="aa-footer">
                                        <!-- footer bottom -->
                                        <div class="aa-footer-top">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="aa-footer-top-area">
                                                            <div class="row">
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="aa-footer-widget">
                                                                        <h3>Main Menu</h3>
                                                                        <ul class="aa-footer-nav">
                                                                            <li><a href="#">Home</a></li>
                                                                            <li><a href="#">Our Products</a></li>
                                                                            <li><a href="#">Contact Us</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="aa-footer-widget">
                                                                        <div class="aa-footer-widget">
                                                                            <h3>Knowledge Base</h3>
                                                                            <ul class="aa-footer-nav">
                                                                                <li><a href="#">Delivery</a></li>
                                                                                <li><a href="#">Returns</a></li>
                                                                                <li><a href="#">Discount</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="aa-footer-widget">
                                                                        <div class="aa-footer-widget">
                                                                            <h3>Useful Links</h3>
                                                                            <ul class="aa-footer-nav">
                                                                                <li><a href="#">Customers</a></li>
                                                                                <li><a href="#">Reviews</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="aa-footer-widget">
                                                                        <div class="aa-footer-widget">
                                                                            <h3>Contact Us</h3>
                                                                            <address>
                                                                                <p> Address</p>
                                                                                <p><span class="fa fa-phone"></span>+94-70-270-6900</p>
                                                                                <p><span class="fa fa-envelope"></span>info@duxtela.com</p>
                                                                            </address>
                                                                            <div class="aa-footer-social">
                                                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                                                <a href="#"><span class="fa fa-instagram"></span></a>
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
                                                        <label for="">Email address<span>*</span></label>
                                                        <input type="text" placeholder="Username or email">
                                                        <label for="">Password<span>*</span></label>
                                                        <input type="password" placeholder="Password">
                                                        <button class="aa-browse-btn" type="submit">Login</button>
                                                        <div id="status"></div>
                                                        <label for="rememberme" class="rememberme"><div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div> </label>
                                                        <p class="aa-lost-password"><a href="#">Lost your password?</a></p>

                                                        <!--            <div class="aa-register-now">
                                                                      <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                                                    </div>-->
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