<?php
session_start();
include "db.php";
$catogory=mysqli_query($conn,"SELECT * from catogory_master ORDER BY catogory");
$nrow=mysqli_num_rows($catogory);
?>



<!DOCTYPE html>
<html lang="zxx">

<head>
		<title>Super Express</title>
		<!--/tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
			<script src="js/jquery-2.1.4.min.js"></script>
		<!-- //jquery -->

		<!-- popup modal (for signin & signup)-->
		<script src="js/jquery.magnific-popup.js"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});

			});
		</script>
		<meta name="keywords" content="Super Express Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);
	
			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!--//tags -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/font-awesome.css" rel="stylesheet">
		<!--pop-up-box-->
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
		<!--//pop-up-box-->
		<!-- price range -->
		<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
		<!-- fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
		<style>
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    body {
        top: 0px !important;
    }

    .goog-te-gadget-icon {
        display:none;
    }
    /* .goog-te-menu-value{
        display:none;
    } */
    .goog-logo-link{
        display:none;
    }
	/* #google_translate_element{
		display:none;
	} */
	
   
</style>
<style type="text/css">

.bs-example{
	font-family: sans-serif;
	position: relative;
	margin: 50px;
}
.typeahead, .tt-query, .tt-hint {
	border: 2px solid #CCCCCC;
	border-radius: 8px;
	font-size: 17px;
	font-color:black;
	height: 37px;
	line-height: 30px;
	outline: medium none;
	/*padding: 8px 12px;*/
	width: 396px;
	padding-left:25px;
}
.typeahead {
	background-color: #71B5CC;
	
}
.typeahead:focus {
	border: 2px solid #0097CF;
}
.tt-query {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
	color: #999999;
}
.tt-dropdown-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 12px;
	padding: 8px 0;
	width: 422px;
}
.tt-suggestion {
	font-size: 24px;
	line-height: 24px;
	padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
	background-color: #8CD1E9;
	color: #FFFFFF;
}
.tt-suggestion p {
	margin: 0;
}
.typeahead1{
    border-radius: 8px;
	font-size: 24px;
}
    
}
</style>
	</head>

<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>

<body>
     <script type="text/javascript">
        // function googleTranslateElementInit() {
        //     new google.translate.TranslateElement({
        //         pageLanguage: 'fr',
        //         includedLanguages: 'fr,en',
        //         layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        //          autoDisplay: false
        //     }, 'google_translate_element');
        // }
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                 pageLanguage: 'en',
                includedLanguages: 'en,fr',
                defaultLanguage: 'fr',
				layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                multilanguagePage: true
         }, 'google_translate_element');
     }
	</script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<!-- top-header -->
	<div class="header-most-top">
			<p>Super Express Offer Zone Top Deals & Discounts</p>
		</div>
		<!-- //top-header -->
		<!-- header-bot-->
		<div class="header-bot">
			<div class="header-bot_inner_wthreeinfo_header_mid">
				<!-- header-bot-->
				<div class="col-md-4 logo_agile">
					<h1>
						<a href="index.php">
							<b><span>S</span><i>uper</i></b>
							<b><span>E</span><i>xpress</i></b>
							<img src="images/logo2.png" alt="" height="48" width="70">
						</a>
					</h1>
				</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
					<!-- header lists -->
						<ul>
							<li>
							<a href="#small-dialog1" data-toggle="modal" data-target="#myModal23">
								<span class="fa fa-map-marker" aria-hidden="true"></span>Delivery Area</a>
						</li>

						<li>
							<span class="fa fa-phone" aria-hidden="true"></span> 0032493481316
						</li>
						<li>
							
								<span class="fa fa-unlock-alt" aria-hidden="true"></span><?php echo $_SESSION['id']? $_SESSION['username']: '<a href="#" data-toggle="modal" data-target="#myModal1"> SignIn&SignUp  </a>' ?>  
						</li>
						<!-- <li>
							<a href="#" data-toggle="modal" data-target="#myModal2">
								<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
						</li> -->
						<?php echo $_SESSION['id'] ? '<li>
							<a href="user_logout.php">
								<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Logout </a>
						</li>' : "" ; ?>
							<?php echo $_SESSION['id'] ? '<li>
							<a href="user_order.php">
								<span class="fa fa-cart-arrow-down" aria-hidden="true"></span> My Orders</a>
						</li>' : "" ; ?>
						<li>
							<a href="#" data-toggle="modal" data-target="#">
								<!-- <span class="fa fa-language fa-3x" aria-hidden="true"></span> Français</a> -->
								<div id="google_translate_element"></div>
						</li>


					</ul>
					<!-- //header lists -->
					<!-- search -->
					<div class="agileits_search">
						 <form method="GET" action="search_page.php">
                            <input type="text" style="vertical-align: bottom !important font-color:black ! important;" name="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Search your Products...." id="acre_value">
                            
                            <!--<input type="submit" value="submit" name="submit">-->
                            <a href="search_page.php"><input type="submit" style="margin-top:10px; width:107px;height:36px; border-radius: 8px;background-color:#A9B0B3;vertical-align: bottom" value="SEARCH"></a>
                         </form>
					</div>
					<!-- //search -->
					<!-- cart details -->
					<div class="top_nav_right">
						<div class="wthreecartaits wthreecartaits2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<a href="cart.php"><button class="w3view-cart" type="button" name="submit" value="">
									<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
								</button></a>
							</form>
						</div>
					</div>
					<!-- //cart details -->
					<div class="clearfix"></div>
				</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	
	<!-- signin Model -->
	<!-- Modal1 -->
		<div class="modal fade" id="myModal23" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body modal-body-sub_agile">
						<div class="main-mailposi">
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
						</div>
						<div class="modal_body_left modal_body_left1">
							<h3 class="agileinfo_sign">Delivery Area</h3>
							<p>
								Deliver areas are : (outside  this areas delivery not possible for now)
								
							</p>
							<form action="" method="POST">
								
								<ul style="list-style-type:disc;">
								    <li>4000 liege</li>
                                    <li>4020 bressoux</li>
                                    <li>4031 angleur</li>
                                    <li>4032 chenee</li>
                                    <li>4101 jemeppe</li>
                                    <li>4420 saint nicolas</li>
                                    <li>4430 ans</li>
								</ul>
								<input type="submit" value="ok" name="login">
							</form>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Super Express Shopping. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="user_login.php" method="POST">
								<div class="styled-input agile-styled-input-top">
									<input type="text" placeholder="User Name" name="user" required="">
								</div>
								<div class="styled-input">
									<input type="password" placeholder="Password" name="password" required="">
								</div>
								<input type="submit" value="Sign In" name="login">
							</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Super Express! Let's set up your Account.
							</p>
							<form action="user_signIn.php" method="post">
								<div class="styled-input agile-styled-input-top">
									<input type="text" placeholder="Name" name="name" required="">
								</div>
								<div class="styled-input">
									<input type="email" placeholder="E-mail" name="email" required="">
								</div>
								<div class="styled-input">
									<input type="password" placeholder="Password" name="password" id="password1" required="">
								</div>
								<div class="styled-input">
									<input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
								</div>
								<div class="styled-input agile-styled-input-top">
									<input type="text" placeholder="Phone" name="phone" required="">
								</div>
								<div class="styled-input agile-styled-input-top">
									<input type="text" placeholder="Address" name="add" required="">
								</div>
								<div class="styled-input agile-styled-input-top">
									<input type="text" placeholder="Pin" name="pin" required="">
								</div>
								<input type="submit" value="Sign Up">
							</form>
							<p>
								<a href="#">By clicking register, I agree to your terms</a>
							</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
				    <form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" required="" onchange="location = this.value;">
							<option value="">All Products</option>
						    <?php while ($row = mysqli_fetch_array($catogory)) { ?>
							<option value="category.php?id=<?php echo $row['slno']; ?>"><?php echo $row['catogory']; ?></option>
							<?php } ?>
						</select>
					</form>
				</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li>
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Food Products
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Bakery</a>
													</li>
													    <li>
															<a href="category.php?id=<?php echo '69';?>">Sauce ET Pates </a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Coffee, Tea & Beverages</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Dried Fruits, Nuts</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo '65'; ?>">Sweets, Chocolate</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo '72'; ?>">Chips ET Snacks</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Jams, Honey & Spreads</a>
														</li>
													</ul>
												</div>
												<div class="col-sm-4 multi-gd-img">
													<ul class="multi-column-dropdown">
														<li>
															<a href="category.php?id=<?php echo '66'; ?>">Refreshment/Beaverages/Drinks</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Pasta & Noodles</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Rice, Flour & Pulses</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo'68';?>">Tabac/Cigarettes</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo'59';?>">Healthy And Tasty</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Oils</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Meat, Poultry & Seafood</a>
														</li>
													</ul>
												</div>
												<div class="col-sm-4 multi-gd-img">
													<img src="images/nav.png" alt="">
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Household
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="agile_inner_drop_nav_info">
												<div class="col-sm-6 multi-gd-img">
													<ul class="multi-column-dropdown">
														<li>
															<a href="category.php?id=<?php '63' ?>">Kitchen & Dining</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo '71' ?>">Journaux et magazine</a>
														</li>
														
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Utensil Cleaners</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo '63'?>">Floor & Other Cleaners</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Disposables, Garbage Bag</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Repellents & Fresheners</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>"> Dishwash</a>
														</li>
													</ul>
												</div>
												<div class="col-sm-6 multi-gd-img">
													<ul class="multi-column-dropdown">
														<li>
															<a href="category.php?id=<?php echo '77'; ?>">Pet Care</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Cleaning Accessories</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo '51'?>">Baby Products</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Crackers</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Detergents</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo $row['slno']; ?>">Festive Decoratives</a>
														</li>
														
														<li>
															<a href="category.php?id=<?php echo '63'; ?>">Home Care</a>
														</li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.php">About Us</a>
								</li>
								<li class="active">
									<a class="" href="contact.php">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>contact Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!---728x90--->

	<!-- contact page -->
	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Contact Us
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form action="#" method="post">
							<div class="">
								<input type="text" name="name" placeholder="Name" required="">
							</div>
							<div class="">
								<input class="text" type="text" name="subject" placeholder="Subject" required="">
							</div>
							<div class="">
								<input class="email" type="email" name="email" placeholder="Email" required="">
							</div>
							<div class="">
								<textarea placeholder="Message" name="message" required=""></textarea>
							</div>
							<input type="submit" value="Submit">
						</form>
					</div>
					<div class="contact-right wthree">
						<div class="col-xs-7 contact-text w3-agileits">
							<h4>GET IN TOUCH :</h4>
							<p>
								<i class="fa fa-map-marker"></i> Street waleffe 119,4101 jemeppe on Meuse
                                Belgium.</p>
							<p>
								<i class="fa fa-phone"></i> Telephone : 0032493481316</p>
							<p>
								<i class="fa fa-facebook"></i> Facebook:
								<a href="#"> Superexpress</a></p>
							<p>
								<i class="fa fa-envelope-o"></i> Email :
								<a href="mailto:example@mail.com">superexpressservice0@gmail.com</a>
							</p>
						</div>
						<!-- <div class="col-xs-5 contact-agile">
							<img src="images/contact2.jpg" alt="">
						</div> -->
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>
	<!-- map -->
	
	<div class="map w3layouts">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1299490.7078731877!2d3.345105040469219!3d50.495696090671295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17d64edf39797%3A0x47ebf2b439e60ff2!2sBelgium!5e0!3m2!1sen!2sin!4v1558949495096!5m2!1sen!2sin" 
	       allowfullscreen></iframe>
	</div>
	

	<!-- newsletter -->
	<div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-8 agile-leftmk">
				<h2>Get your Groceries delivered from Super Express</h2>
				<p>Free Delivery on your first order!</p>
				<form action="#" method="post">
					<input type="email" placeholder="E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk">
				<img src="images/tab3.png" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //newsletter -->
	<!---728x90--->

	<!-- footer -->
	<footer>
		<div class="container">
			
			<!-- //footer second section -->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Categories</h3>
						<ul>
							<li>
							    <a href="category.php?id=<?php echo $row['slno']; ?>">Bakery</a>
							</li>
							<li>
							    <a href="category.php?id=<?php echo '69'; ?>">Sauce ET Pates </a>
							</li>
							<li>
							    <a href="category.php?id=<?php echo '65'; ?>">Sweets, Chocolate</a>
							</li>
							<li>
							    <a href="category.php?id=<?php echo '72'; ?>">Chips ET Snacks</a>
							</li>
							<li>
				                <a href="category.php?id=<?php echo $row['slno']; ?>">Jams, Honey & Spreads</a>
							</li>
							<li>
							    <a href="category.php?id=<?php echo '51'; ?>">Baby Products</a>
							</li>
							</ul>
						</div>
						<div class="col-xs-6 footer-grids agile-secomk">
							<ul>
								<li>
									<a href="category.php?id=<?php '63' ?>">Kitchen & Dining</a>
								</li>
								<li>
									<a href="category.php?id=<?php echo '71' ?>">Journaux et magazine</a>
								</li>
														
								<li>
									<a href="category.php?id=<?php echo $row['slno']; ?>">Utensil Cleaners</a>
								</li>
								<li>
									<a href="category.php?id=<?php echo '63' ?>">Floor & Other Cleaners</a>
								</li>
								<li>
									<a href="category.php?id=<?php echo $row['slno']; ?>">Crackers</a>
								</li>
								<li>
									<a href="category.php?id=<?php echo $row['slno']; ?>">Detergents</a>
								</li>
							</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Quick Links</h3>
						<ul>
						<li>
									<a href="about.php">About Us</a>
								</li>
								<li>
									<a href="contact.php">Contact Us</a>
								</li>
								<li>
									<a href="contact.php">Help</a>
								</li>
								
								<li>
									<a href="contact.php">Terms of use</a>
								</li>
								<li>
									<a href="contact.php">Privacy Policy</a>
								</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> Rue waleffe 119,
                                                              <li> 4101 jemeppe sur meuse</li>
                                                              <li> Belgium.</li>
								
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- <div class="agileits_app-devices">
						<h5>Download the App</h5>
						<a href="#">
							<img src="images/1.png" alt="">
						</a>
						<a href="#">
							<img src="images/2.png" alt="">
						</a>
						<div class="clearfix"> </div>
					</div> -->
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			<div class="agile-sometext">
				<!-- <div class="sub-some">
					<h5>Online Grocery Shopping</h5>
					<p>Order online. All your favourite products from the low price online supermarket for grocery home delivery in Delhi,
						Gurgaon, Bengaluru, Mumbai and other cities in India. Lowest prices guaranteed on Patanjali, Aashirvaad, Pampers, Maggi,
						Saffola, Huggies, Fortune, Nestle, Amul, MamyPoko Pants, Surf Excel, Ariel, Vim, Haldiram's and others.</p>
				</div> -->
				<div class="sub-some">
					<h5>Shop online with the best deals & offers</h5>
					<p>Now Get Upto 40% Off On Everyday Essential Products Shown On The Offer Page. The range includes Grocery, Personal Care,
						Baby Care, Pet Supplies, Healthcare and Other Daily Need Products. Discount May Vary From Product To Product.</p>
				</div>
				<!-- brands -->
				<div class="sub-some">
					<h5>Popular Brands</h5>
					<ul>
						<li>
							    <a href="">Aashirvaad</a>
							</li>
							<li>
							    <a href="">	Amul</a>
							</li>
							<li>
							    <a href="">	Bingo</a>
							</li>
							<li>
								<a href="">Boost</a>
							</li>
							<li>
							    <a href="">	Durex</a>
							</li>
							<li>
							    <a href="">	Maggi</a>
							</li>
							<li>
								<a href="">Glucon-D</a>
							</li>
							<li>
								<a href="">Horlicks</a>
							</li>
							<li>
							<a href="">	Head & Shoulders</a>
							</li>
							<li>
								<a href="">Dove</a>
							</li>
							<li>
							    <a href="">	Dettol</a>
							</li>
							<li>
								<a href="">Dabur</a>
							</li>
							<li>
							    <a href="">	Colgate</a>
							</li>
							<li>
								<a href="">Coca-Cola</a>
							</li>
							<li>
							    <a href="">	Closeup</a>
							</li>
							<li>
								<a href="">Cinthol</a>
							</li>
							<li>
								<a href="">Cadbury</a>
							</li>
							<li>
								<a href="">Bru</a>
							</li>
							<li>
							<a href="">	Bournvita</a>
							</li>
							<li>
								<a href="">Tang</a>
							</li>
							<li>
								<a href="">Pears</a>
							</li>
							<li>
							<a href="">	Oreo</a>
							</li>
							<li>
								 <a href="">Taj Mahal</a>
							</li>
							<li>
								<a href="">Sprite</a>
							</li>
							<li>
								<a href="">Thums Up</a>
							</li>
							<li>
								<a href="">Fair & Lovely</a>
							</li>
							<li>
								<a href="">Lakme</a>
							</li>
							<li>
								<a href="">Tata</a>
							</li>
							<li>
							    <a href="">	Sunfeast</a>
							</li>
							<li>
							    <a href="">	Sunsilk</a>
							</li>
							<li>
							    <a href="">	Patanjali</a>
							</li>
							<li>
							   <a href=""> MTR</a>
							</li>
							<li>
							    <a href="">	Kissan</a>
							</li>
							<li>
								<a href=""> Lipton</a>
							</li>
					</ul>
				</div>
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu">
					<h5>Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>© 2019 Super Express. All rights reserved | Design by
				<a href="https://ictcodes.net/">ictcodes.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> -->
     <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script src="js/typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script>
	

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>



</html>