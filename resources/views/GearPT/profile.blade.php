+<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>PROFILE - GEARPT</title>
		<link rel="apple-touch-icon" href="img/Logo/2.png">
		<link rel="shortcut icon" type="image/x-icon" href="img/Logo/2.png">
	
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a><i class="fa fa-phone"></i> +84-1900-1112</a></li>
						<li><a><i class="fa fa-envelope-o"></i> contact@gearpt.com</a></li>
						<li><a><i class="fa fa-map-marker"></i> 20 Cong Hoa Street, HCMC.</a></li>
						{{-- <li><span class="flag-icon flag-icon-vn"></span></li> --}}
						
						{{-- <li class="dropdown dropdown-language nav-item"><a><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>						<li><span class="flag-icon flag-icon-vn"></span></li> --}}
					</ul>
					{{-- <ul class="nav navbar-nav float-right">         
						<li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
						  <div class="dropdown-menu" aria-labelledby="dropdown-flag">
							<div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
						  </div>
						</li>
					</ul> --}}
		  
					<ul class="header-links pull-right">
						<li><a href="{{url('profile')}}"><i class="fa fa-user-o"></i> {{Session::get('loginID')}}</a></li>
						<li><a href="{{url('logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
					</ul>

				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="{{url('/')}}" class="logo">
									<img src="./img/Logo/logo_gearpt.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('product')}}">Product</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

        <body class="img js-fullheight" style="background-image: url(../img/Background/bg.jpg);">
            <div class="container mt-3" >
                <h2>Client Profile</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form action="{{url('save-client')}}" method="post" enctype="multipart/form-data" style="margin: 50px">
                    @csrf
        
                    <div class="mb-3">
                        <label for="clientName" >Full name</label>
                        <input type="text" class="form-control" id="clientName" placeholder="Enter client name" name="clientName" require>
                        @error('clientName')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="clientPhone" >Phone</label>
                        <input type="number" class="form-control" id="clientPhone" placeholder="Enter client price" name="clientPhone" require>
                        @error('clientPhone')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                         @enderror
                    </div>
        
                    <div class="mb-3" >
                        <label for="clientAddress" >Address</label>
                        <input type="number" class="form-control" id="clientAddress" placeholder="Enter client address" name="clientAddress" require>
                        @error('clientAddress')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                         @enderror
                    </div>
                    
                    <div class="mb-3" >
                        <label for="clientUsername" >Username</label>
                        <input type="text" class="form-control" id="clientUsername" placeholder="Enter client username" name="clientUsername" require>
                        @error('clientUsername')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                         @enderror
                    </div>
        
                    <div class="mb-3" >
                        <label for="clientPassword" >Password</label>
                        <input type="text" class="form-control" id="clientPassword" placeholder="Enter client password" name="clientPassword" require>
                        @error('clientPassword')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                         @enderror
                    </div>
                    
                    <div class="mb-3" >
                        <label for="clientImage" >Image</label>
                        <input type="file" class="form-control" id="clientImage" placeholder="Enter client image" name="clientImage" require>
                        @error('clientImage')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                         @enderror
                    </div>
        
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>GearPT - "We sell electronic devices."</p>
								<ul class="footer-links">
									<li><a><i class="fa fa-map-marker"></i>20 Cong Hoa Street, HCMC.</a></li>
									<li><a><i class="fa fa-phone"></i>+84-1900-1112</a></li>
									<li><a><i class="fa fa-envelope-o"></i>contact@gearpt.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>
								GearPT, Inc. All rights reserved.
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>