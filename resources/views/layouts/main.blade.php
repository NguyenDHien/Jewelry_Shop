<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.themeforshop.com/html_jewelry/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 12:04:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="http://demo.themeforshop.com/" />
  <meta name="description" content="" />
  <title>@yield('title')</title>
    <link href="{{ url('resources') }}/assets/stylesheets/style.css" rel='stylesheet' type='text/css'>
	<link href="{{ url('resources') }}/assets/stylesheets/font.css" rel='stylesheet' type='text/css'>
	<link href="{{ url('resources') }}/assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="{{ url('resources') }}/assets/stylesheets/jquery.camera.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/application.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/jquery.owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/spr.css" rel="stylesheet" type="text/css" media="all">
	<link href="{{ url('resources') }}/assets/stylesheets/addthis.css" rel="stylesheet" type="text/css" media="all">
	<script src="{{ url('resources') }}/assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/jquery.camera.min.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/jquery.mobile.customized.min.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/cookies.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/modernizr.js" type="text/javascript"></script>  
	<script src="{{ url('resources') }}/assets/javascripts/application.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/jquery.owl.carousel.min.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/jquery.bxslider.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/skrollr.min.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/jquery.fancybox-buttons.js" type="text/javascript"></script>
	<script src="{{ url('resources') }}/assets/javascripts/jquery.zoom.js" type="text/javascript"></script>	
	<script src="{{ url('resources') }}/assets/javascripts/cs.script.js" type="text/javascript"></script>

</head>
<body itemscope="" itemtype="http://schema.org/WebPage" class="templatePage notouch">
  
	<header id="top" class="clearfix">
		<!--top-->
		<div class="container">
		  <div class="top row">
			<div class="col-md-6 phone-shopping">
			  <span>PHONE SHOPING (01) 123 456 UJ</span>
			</div>
			<div class="col-md-18">
			  <ul class="text-right">
				<li class="customer-links hidden-xs">
					@if (Auth::check())
					<ul id="accounts" class="list-inline">
						<li class="my-account">
							<a href="{{ route('admin') }}">My Account</a>
						</li>  
						<li class="register">
							<a href="{{ route('admin.logout') }}" id="customer_register_link">Logout</a>
						</li> 
					</ul>
					@else
					<ul id="accounts" class="list-inline">
						<li class="login">    
							<span id="loginButton">
								<a href="{{ route('admin.login') }}">Login</a>
								
							</span>
							{{-- <!-- Customer Account Login -->
							<div id="loginBox" class="dropdown-menu text-left">
							<form method="post" id="customer_login" accept-charset="UTF-8">
								@csrf
								<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
								<div id="bodyBox">
									<ul class="control-container customer-accounts list-unstyled">
										<li class="clearfix">
											<label for="customer_email_box" class="control-label">Email Address <span class="req">*</span></label>
											<input type="email" value="" name="email" id="customer_email_box" class="form-control">
										</li>						 
										<li class="clearfix">
											<label for="customer_password_box" class="control-label">Password <span class="req">*</span></label>
											<input type="password" value="" name="password" id="customer_password_box" class="form-control password">
										</li>						  
										<li class="clearfix">
											<button class="btn" type="submit">Login</button>
										</li>
										<li class="clearfix">
											<a class="action btn btn-1" href="register.html">Create an account</a>
										</li>
									</ul>
								</div>
							</form>
							</div>     --}}
						</li>
						<li>/</li>   
						<li class="register">
							<a href="{{ route('admin.register') }}" id="customer_register_link">Create an account</a>
						</li> 
					</ul>
					@endif
				</li>      
				<li id="widget-social">
				  <ul class="list-inline">            
					<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>                        
					<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>           
				  </ul>
				</li>        
			  </ul>
			</div>
		  </div>
		</div>
		<!--End top-->
		<div class="line"></div>
		<!-- Navigation -->
		<div class="container">
			<div class="top-navigation">
				<ul class="list-inline">
					<li class="top-logo">
						<a id="site-title" href="{{ route('home') }}" title="Jewelry - HTML Template theme">          
						<img class="img-responsive" src="{{ url('resources') }}/assets/images/logo.png" alt="Jewelry - HTML Template theme">          
						</a>
					</li>
					<li class="navigation">			
						<nav class="navbar">
							<div class="clearfix">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle main navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
								</div>
								<div class="is-mobile visible-xs">
									<ul class="list-inline">
										<li class="is-mobile-menu">
										<div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="icon-bar-group">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											</span>
										</div>
										</li>
										<li class="is-mobile-login">
										<div class="btn-group">
											<div class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-user"></i>
											</div>
											<ul class="customer dropdown-menu">
												<li class="logout">
												<a href="#">Login</a>
												</li>
												<li class="account last">
												<a href="register.html">Register</a>
												</li>
											</ul>
										</div>
										</li>
										<li class="is-mobile-wl">
										<a href="#"><i class="fa fa-heart"></i></a>
										</li>
										<li class="is-mobile-cart">
										<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</li>
									</ul>
								</div>
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav hoverMenuWrapper">
										<li class="nav-item active">
										<a href="#">
										<span>Home</span>
										</a>
										</li>
										<li class="dropdown mega-menu">
										<a href="collection.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
										<span>Collections</span>
										<i class="fa fa-caret-down"></i>
										<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
										<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
										</a>
										<div class="megamenu-container megamenu-container-1 dropdown-menu banner-bottom mega-col-4" style="">
											<ul class="sub-mega-menu">
												<li>
												<ul>
													<li class="list-title">Collection Links</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Dolorem Sed </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Proident Nulla </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Phasellus Leo <span class="megamenu-label hot-label">Hot</span>
													</a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Tristique Amet <span class="megamenu-label feature-label">Featured</span>
													</a>
													</li>
												</ul>
												</li>
												<li>
												<ul>
													<li class="list-title">Collection Links</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Dolorem Sed </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Proident Nulla <span class="megamenu-label new-label">New</span>
													</a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Phasellus Leo </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Tristique Amet </a>
													</li>
												</ul>
												</li>
												<li>
												<ul>
													<li class="list-title">Collection Links</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Dolorem Sed </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Proident Nulla </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Phasellus Leo <span class="megamenu-label sale-label">Sale</span>
													</a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Tristique Amet </a>
													</li>
												</ul>
												</li>
												<li>
												<ul>
													<li class="list-title">Collection Links</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Dolorem Sed <span class="megamenu-label new-label">New</span>
													</a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Proident Nulla </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="product.html">Phasellus Leo </a>
													</li>
													<li class="list-unstyled li-sub-mega last">
													<a href="product.html">Tristique Amet <span class="megamenu-label hot-label">Hot</span>
													</a>
													</li>
												</ul>
												</li>
											</ul>
										</div>
										</li>
										{{-- Navbar pages --}}
										{{-- <li class="dropdown mega-menu">
										<a href="collection.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
										<span>Pages</span>
										<i class="fa fa-caret-down"></i>
										<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
										<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
										</a>
										<div class="megamenu-container megamenu-container-2 dropdown-menu banner-right mega-col-2" style="display: none;">
											<ul class="sub-mega-menu">
												<li>
												<ul>
													<li class="list-title">Page Layout</li>
													<li class="list-unstyled li-sub-mega">
													<a href="collection.html">Collection full width </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="collection-left.html">Collection - left sidebar </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="collection-right.html">Collection - right sidebar </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="product.html">Product full width </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="product-left.html">Product - left sidebar </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="product-right.html">Product - right sidebar </a>
													</li>
												</ul>
												</li>
												<li>
												<ul>
													<li class="list-title">Page Content</li>
													<li class="list-unstyled li-sub-mega">
													<a href="about-us.html">About </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="price-table.html">Price table </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="faqs.html">FAQs </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="testimonials.html">Testimonial </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="collection.html">New product introduction </a>
													</li>
													<li class="list-unstyled li-sub-mega last">
													<a href="contact.html"> Contact </a>
													</li>
												</ul>
												</li>
											</ul>
										</div>
										</li> --}}
										{{-- Navbar --}}
										{{-- <li class="nav-item dropdown">
										<a href="blog-full.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
										<span>Blog</span>
										<i class="fa fa-caret-down"></i>
										<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
										<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
										</a>
										<ul class="dropdown-menu">
											<li class=""><a tabindex="-1" href="blog-3-col.html">Blog grid 3 columns</a></li>
											<li class=""><a tabindex="-1" href="blog-2-col.html">Blog grid 2 columns</a></li>
											<li class=""><a tabindex="-1" href="blog.html">Blog grid full width</a></li>
											<li class=""><a tabindex="-1" href="blog-left.html">Blog - left sidebar</a></li>
											<li class=""><a tabindex="-1" href="blog-right.html">Blog - right sidebar</a></li>
											<li class=""><a tabindex="-1" href="article.html">Post full width</a></li>
											<li class=""><a tabindex="-1" href="article-left.html"> Post - left sidebar</a></li>
											<li class="last"><a tabindex="-1" href="article-right.html">Post - right sidebar</a></li>
										</ul>
										</li> --}}
										<li class="nav-item">
										<a href="contact.html">
										<span>Contact</span>
										</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</li>		  
					<li class="top-search hidden-xs">
						<div class="header-search">
							<a href="#">
							<span data-toggle="dropdown">
							<i class="fa fa-search"></i>
							<i class="sub-dropdown1"></i>
							<i class="sub-dropdown"></i>
							</span>
							</a>
							<form id="header-search" class="search-form dropdown-menu" action="http://demo.themeforshop.com/html_jewelry/search.html" method="get">
								<input type="hidden" name="type" value="product">
								<input type="text" name="q" value="" accesskey="4" autocomplete="off" placeholder="Search something...">
								<button type="submit" class="btn">Search</button>
							</form>
						</div>
					</li>					
					<li class="umbrella hidden-xs">
						<div id="umbrella" class="list-inline unmargin">
							<div class="cart-link">
								<a href="cart.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
									<i class="sub-dropdown1"></i>
									<i class="sub-dropdown"></i>
									<div class="num-items-in-cart">
										<span class="icon">
										  Cart
										  <span class="number">1</span>
										</span>
									</div>
								</a>
								<div id="cart-info" class="dropdown-menu" style="display: none;">
									<div id="cart-content">
										<div class="items control-container">
											<div class="row items-wrapper">
												<a class="cart-close" title="Remove" href="javascript:void(0);"><i class="fa fa-times"></i></a>
												<div class="col-md-8 cart-left">
													<a class="cart-image" href="product.html"><img src="{{ url('resources') }}/assets/images/1_grande.jpg" alt="" title=""></a>
												</div>
												<div class="col-md-16 cart-right">
													<div class="cart-title">
														<a href="product.html">Product with left sidebar - black / small</a>
													</div>
													<div class="cart-price">
														$200.00<span class="x"> x </span>1
													</div>
												</div>
											</div>
										</div>
										<div class="subtotal">
											<span>Subtotal:</span><span class="cart-total-right">$200.00</span>
										</div>
										<div class="action">
											<button class="btn" onclick="window.location='cart.html'">CHECKOUT</button><a class="btn btn-1" href="cart.html">View Cart</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>		  		 
					<li class="mobile-search visible-xs">
						<form id="mobile-search" class="search-form" action="http://demo.themeforshop.com/html_jewelry/search.html" method="get">
							<input type="hidden" name="type" value="product">
							<input type="text" class="" name="q" value="" accesskey="4" autocomplete="off" placeholder="Search something...">
							<button type="submit" class="search-submit" title="search"><i class="fa fa-search"></i></button>
						</form>
					</li>		  
				</ul>
			</div>
			<!--End Navigation-->
			<script>
			  function addaffix(scr){
				if($(window).innerWidth() >= 1024){
				  if(scr > $('#top').innerHeight()){
					if(!$('#top').hasClass('affix')){
					  $('#top').addClass('affix').addClass('animated');
					}
				  }
				  else{
					if($('#top').hasClass('affix')){
					  $('#top').prev().remove();
					  $('#top').removeClass('affix').removeClass('animated');
					}
				  }
				}
				else $('#top').removeClass('affix');
			  }
			  $(window).scroll(function() {
				var scrollTop = $(this).scrollTop();
				addaffix(scrollTop);
			  });
			  $( window ).resize(function() {
				var scrollTop = $(this).scrollTop();
				addaffix(scrollTop);
			  });
			</script>
		</div>
    </header>

	{{-- TOAST NOTIFY --}}
	{{-- @if (Session::has('success'))
	<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
		<div class="toast" style="position: absolute; top: 0; right: 0;">
		  <div class="toast-header">
			<img src="..." class="rounded mr-2" alt="...">
			<strong class="mr-auto">Notification</strong>
			<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="toast-body">
			{{ Session::get('success') }}
		  </div>
		</div>
	  </div>
	
	@endif
	@if (Session::has('error'))
	<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
		<div class="toast" style="position: absolute; top: 0; right: 0;">
		  <div class="toast-header">
			<img src="..." class="rounded mr-2" alt="...">
			<strong class="mr-auto">Notification</strong>
			<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="toast-body">
			{{ Session::get('error') }}
		  </div>
		</div>
	  </div>
	@endif --}}

	@if (Session::has('success'))
	<div class="alert alert-success alert-dismissible" style="margin-bottom: 10px">
		<div class="container">
			<strong>Notify!</strong> {{ Session::get('success') }}.
		</div>
	  </div>
	@endif
	@if (Session::has('error'))
		<div class="alert alert-danger alert-dismissible">
			<div class="container">
				<strong>Error!</strong> {{ Session::get('error') }}
			</div>
			
		  </div>
	@endif

    @yield('body')

    
    <footer id="footer">      
		<div id="footer-content">
			<h6 class="general-title contact-footer-title">Newsletter</h6>  
			<div id="widget-newsletter">
				<div class="container">            
				  <div class="newsletter col-md-24">
					<form action="http://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&amp;id=c63b4d644d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
					  <span class="news-desc">We promise only send the good things</span>
					  <div class="group_input">
						<input class="form-control" type="email" placeholder="Your Email Address" name="Email" id="email-input">
						<div class="unpadding-top"><button class="btn btn-1" type="submit"><i class="fa fa-paper-plane"></i></button></div>
					  </div>              
					</form>
				  </div>						
				</div>
			</div>
			
			<div class="footer-content footer-content-top clearfix">
				<div class="container">
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">About Us</h5>						
						<ul class="list-unstyled list-styled">						  
						  <li class="list-unstyled">
							<a href="account.html">Store Locations</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Whosesalers</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Map Site</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Contact Us</a>
						  </li>						  
						</ul>
					  </div>
					</div>   
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Information</h5>						
						<ul class="list-unstyled list-styled">						  
						  <li class="list-unstyled">
							<a href="account.html">Help &amp; FAQs</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Advance Search</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Gift Cards</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Shop By Brands</a>
						  </li>						  
						</ul>
					  </div>
					</div>
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Account</h5>						
						<ul class="list-unstyled list-styled">						  
						  <li class="list-unstyled">
							<a href="account.html">Preferences</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Order History</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Cart Page</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Sign In</a>
						  </li>						  
						</ul>
					  </div>
					</div>
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Customer</h5>						
						<ul class="list-unstyled list-styled">						  
							<li class="list-unstyled">
								<a href="search.html">Search Advanced</a>
							</li>						  
							<li class="list-unstyled">
								<a href="#">Return Policy</a>
							</li>						  
							<li class="list-unstyled">
								<a href="#">Privacy Policy</a>
							</li>						  
							<li class="list-unstyled">
								<a href="#">Help &amp; Contact</a>
							</li>						  
						</ul>
					  </div>
					</div>   
				</div>
			</div>
			<div class="footer-content footer-content-bottom clearfix">
				<div class="container">
					<div class="copyright col-md-12">
						© 2015 <a href="about-us.html">Jewelry - HTML template</a>. All Rights Reserved.
					</div>
					<div id="widget-payment" class="col-md-12">
						<ul id="payments" class="list-inline animated">
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Visa"><a href="#" class="icons visa"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mastercard"><a href="#" class="icons mastercard"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="American Express"><a href="#" class="icons amex"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Paypal"><a href="#" class="icons paypal"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Moneybookers"><a href="#;" class="icons moneybookers"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>   
	</footer>
	
    <div id="quick-shop-modal" class="modal in" role="dialog" aria-hidden="false" tabindex="-1" data-width="800">
		<div class="modal-backdrop in" style="height: 742px;">
		</div>
		<div class="modal-dialog rotateInDownLeft animated">
			<div class="modal-content">
				<div class="modal-header">
					<i class="close fa fa-times btooltip" data-toggle="tooltip" data-placement="top" title="" data-dismiss="modal" aria-hidden="true" data-original-title="Close"></i>
				</div>
				<div class="modal-body">
					<div class="quick-shop-modal-bg" style="display: none;">
					</div>
					<div class="row">
						<div class="col-md-12 product-image">
							<div id="quick-shop-image" class="product-image-wrapper">
								<a class="main-image"><img class="img-zoom img-responsive image-fly" src="{{ url('resources') }}/assets/images/1_grande.jpg" data-zoom-image="./{{ url('resources') }}/assets/images/1.jpg" alt=""/></a>
								<div id="gallery_main_qs" class="product-image-thumb">
									<a class="image-thumb active" href="{{ url('resources') }}/assets/1images/.html" data-image="./{{ url('resources') }}/assets/images/1_grande.jpg" data-zoom-image="{{ url('resources') }}/assets/images/1.html"><img src="{{ url('resources') }}/assets/images/1_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="{{ url('resources') }}/assets/images/2.html" data-image="./{{ url('resources') }}/assets/images/2_grande.jpg" data-zoom-image="{{ url('resources') }}/assets/images/2.html"><img src="{{ url('resources') }}/assets/images/2_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="{{ url('resources') }}/assets/images/3.html" data-image="./{{ url('resources') }}/assets/images/3_grande.jpg" data-zoom-image="{{ url('resources') }}/assets/images/3.html"><img src="{{ url('resources') }}/assets/images/3_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="{{ url('resources') }}/assets/images/4.html" data-image="./{{ url('resources') }}/assets/images/4_grande.jpg" data-zoom-image="{{ url('resources') }}/assets/images/4.html"><img src="{{ url('resources') }}/assets/images/4_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="{{ url('resources') }}/assets/images/5.html" data-image="./{{ url('resources') }}/assets/images/5_grande.jpg" data-zoom-image="{{ url('resources') }}/assets/images/5.html"><img src="{{ url('resources') }}/assets/images/5_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="{{ url('resources') }}/assets/images/6.html" data-image="./{{ url('resources') }}/assets/images/6_grande.jpg" data-zoom-image="{{ url('resources') }}/assets/images/6.html"><img src="{{ url('resources') }}/assets/images/6_compact.jpg" alt=""/></a>
								</div>	
							</div>
						</div>
						<div class="col-md-12 product-information">
							<h1 id="quick-shop-title"><span> <a id="setName" href="http://demo.themeforshop.com/products/curabitur-cursus-dignis">Curabitur cursus dignis</a></span></h1>
							<div id="quick-shop-infomation" class="description">
								<div id="quick-shop-description" class="text-left">
									<p id="setDes">
										Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.
									</p>
									
								</div>
							</div>
							<div id="quick-shop-container">
								<div id="quick-shop-relative" class="relative text-left">
									<ul class="list-unstyled">
										<li class="control-group vendor">
										<span class="control-label">Vendor :</span><a href="http://demo.themeforshop.com/collections/vendors?q=Vendor+1"> Vendor 1</a>
										</li>
										<li class="control-group type">
										<span class="control-label">Type :</span><a href="http://demo.themeforshop.com/collections/types?q=Sweaters+Wear"> Sweaters Wear</a>
										</li>
									</ul>
								</div>
								<form action="#" method="post" class="variants" id="quick-shop-product-actions" enctype="multipart/form-data">
									<div id="quick-shop-price-container" class="detail-price">
										<span id="setPriceSale" class="price_sale">$259.00</span>
										<div id="hide-jq"><span class="dash">/</span>
											<del id="setPrice" class="price_compare">$300.00</del>
										</div>
										
									</div>
									<div class="quantity-wrapper clearfix">
										<label class="wrapper-title">Quantity</label>
										<div class="wrapper">
											<input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
											<span class="qty-group">
											<span class="qty-wrapper">
											<span class="qty-up" title="Increase" data-src="#qs-quantity">
											<i class="fa fa-plus"></i>
											</span>
											<span class="qty-down" title="Decrease" data-src="#qs-quantity">
											<i class="fa fa-minus"></i>
											</span>
											</span>
											</span>
										</div>
									</div>
									<div id="quick-shop-variants-container" class="variants-wrapper">
										<div class="selector-wrapper">
											<label for="#quick-shop-variants-1293238211-option-0">Color</label>
											<div class="wrapper">
												<select class="single-option-selector" data-option="option1" id="#quick-shop-variants-1293238211-option-0" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
													<option value="black">black</option>
													<option value="red">red</option>
													<option value="blue">blue</option>
													<option value="purple">purple</option>
													<option value="green">green</option>
													<option value="white">white</option>
												</select>
												<button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">black</span></button><i class="fa fa-caret-down"></i>
											</div>
										</div>
										<div class="selector-wrapper">
											<label for="#quick-shop-variants-1293238211-option-1">Size</label>
											<div class="wrapper">
												<select class="single-option-selector" data-option="option2" id="#quick-shop-variants-1293238211-option-1" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
													<option value="small">small</option>
													<option value="medium">medium</option>
													<option value="large">large</option>
												</select>
												<button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">small</span></button><i class="fa fa-caret-down"></i>
											</div>
										</div>
									</div>
									<div class="others-bottom">
										<input id="quick-shop-add" class="btn small add-to-cart" type="submit" name="add" value="Add to Cart" style="opacity: 1;">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@yield('popupIndex')
	<script>
		$('.quick-view-handle').click(function(e) {
			if (e.target.id == 'quich-view-i') {
				$name = $(e.target).parent().parent().parent().parent().children().children().first().text();
				// sale
				if ($(e.target).parent().parent().parent().parent().children().eq(1).children().children().attr('class') == 'price_sale') {
					$priceSale = $(e.target).parent().parent().parent().parent().children().eq(1).children().children().first().text();
					$price = $(e.target).parent().parent().parent().parent().children().eq(1).children().children().eq(1).text();
					$('#hide-jq').css('display', 'inline');
					$('#setPriceSale').text($priceSale);
					$('#setPrice').text($price);
					
				}
				// ko sale
				else{
					$price = $(e.target).parent().parent().parent().parent().children().eq(1).children().children().first().text();
					$('#hide-jq').css('display', 'none');
					$('#setPriceSale').text($price);
				}
			}
			else {
				$name = $(e.target).parent().parent().parent().children().children().first().text();
				// sale
				if ($(e.target).parent().parent().parent().children().eq(1).children().children().attr('class') == 'price_sale') {
					$priceSale = $(e.target).parent().parent().parent().children().eq(1).children().children().first().text();
					$price = $(e.target).parent().parent().parent().children().eq(1).children().children().eq(1).text();
					$('#hide-jq').css('display', 'inline');
					$('#setPriceSale').text($priceSale);
					$('#setPrice').text($price);
				}
				// ko sale
				else{
					$price = $(e.target).parent().parent().parent().children().eq(1).children().children().first().text();
					$('#hide-jq').css('display', 'none');
					$('#setPriceSale').text($price);
				}
			}
			//  $price = $(".getPrice").text();
			//  $des = $(".getDes").text();
			//  $img = $(".getImg").attr('src');
			$('#setName').text($name);
			
			console.log($price);
			// console.log($des);
			// console.log($img);
		});
			 
		</script>
</body>