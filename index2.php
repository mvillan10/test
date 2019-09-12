<?php 
    session_start();
	include "db.php";
	
    $cat=mysqli_query($conn,"SELECT DISTINCT(catogory) FROM products");
    
    $sql2=mysqli_query($conn,"SELECT * from products  ORDER BY discountper desc LIMIT 10");
    $num2=mysqli_num_rows($sql2);
    
    $catogory = mysqli_query($conn, "SELECT * from catogory_master ORDER BY catogory asc");
	$nrow = mysqli_num_rows($catogory);
	$qty=1;
?>

<!DOCTYPE html>
<html lang="zxx">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <title>Super Express</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
		   <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var product_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{slno:product_id},  
                success:function(data){  
                     $('#product_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
	
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

<script src="main.js"></script>
		

	<!--multislider-->
	<link href="multislider/css/custom.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

        
        <script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

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
        /*product slider*/
            .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
            .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
            .MultiCarousel-inner p {font-size: 26px; color: #ff0b0b;}
            .text-center p{font-size: 25px; color: #fd0a0a}
            .MultiCarousel .MultiCarousel-inner .item { float: left;}
            .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:white; color:#666;}
            .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
            .MultiCarousel .leftLst { left:0; }
            .MultiCarousel .rightLst { right:0; }
            .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
            /* // product slider*/
            
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
        
        <script type="text/javascript">
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
							<a href="#" data-toggle="modal" data-target="#">
								<!-- <span class="fa fa-language fa-3x" aria-hidden="true"></span> Français</a> -->
								<div id="google_translate_element"></div>
						</li>

						
				

				<!-- <li class="nav navbar-nav navbar-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a> -->
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-info class">
								<div class="panel-heading" style="color:red;">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:red; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-warning" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
						
					</ul>
					<!-- //header lists -->
					<!-- search -->
					<table class="container"><tr>
					<div class="agileits_search">
						<!--<form action="" method="post">-->
						<!--	<input name="Search" type="search" placeholder="How can we help you today?" required="">-->
						<!--	<button type="submit" class="btn btn-default" aria-label="Left Align">-->
						<!--		<span class="fa fa-search" aria-hidden="true"> </span>-->
						<!--	</button>-->
						<!--</form>-->
					     <form method="GET" action="search_page.php">
                            <input type="text" style="vertical-align: bottom !important font-color:black ! important;" name="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Search your Products...." id="acre_value">
                            
                            <!--<input type="submit" value="submit" name="submit">-->
                            <a href="search_page.php"><input type="submit" style="margin-top:10px; width:107px;height:36px; border-radius: 8px;background-color:#A9B0B3;vertical-align: bottom" value="SEARCH"></a>
						 </form>
						 <a href="cart.php?qty=<?php echo $qty ?>"><button class="w3view-cart" style="float: right;"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</div></tr>
				
					</table>    
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
								Sign In now, Let's start your Super Express. Don't have an account?
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
								Sign In now, Let's start your Super Express. Don't have an account?
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
							<!--<p>
								<a href="#">By clicking register, I agree to your terms</a>
							</p>-->
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
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav menu__list">
									<li class="active">
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
															<a href="category.php?id=<?php echo '69'; ?>">Sauce ET Pates </a>
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
															<a href="category.php?id=<?php echo '79'; ?>">Chips ET Snacks</a>
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
															<a href="category.php?id=<?php echo '68'; ?>">Tabac/Cigarettes</a>
														</li>
														<li>
															<a href="category.php?id=<?php echo '59'; ?>">Healthy And Tasty</a>
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
															<a href="category.php?id=<?php echo '63' ?>">Floor & Other Cleaners</a>
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
															<a href="category.php?id=<?php echo '51' ?>">Baby Products</a>
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
									<li class="">
										<a class="nav-stylehead" href="contact.php">Contact</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- //navigation -->
		<!-- banner -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators-->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
				<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="container">
						<div class="carousel-caption">
							<h3>Big
								<span>Save</span>
							</h3>
							<p>Get flat
								<span>10%</span> Cashback</p>
							<a class="button2" href="search_page.php">Shop Now </a>
						</div>
					</div>
				</div>
				<div class="item item2">
					<div class="container">
						<div class="carousel-caption">
							<h3>Healthy
								<span>Saving</span>
							</h3>
							<p>Get Upto
								<span>30%</span> Off</p>
							<a class="button2" href="search_page.php">Shop Now </a>
						</div>
					</div>
				</div>
				<div class="item item3">
					<div class="container">
						<div class="carousel-caption">
							<h3>Big
								<span>Deal</span>
							</h3>
							<p>Get Best Offer Upto
								<span>20%</span>
							</p>
							<a class="button2" href="search_page.php">Shop Now </a>
						</div>
					</div>
				</div>
				<div class="item item4">
					<div class="container">
						<div class="carousel-caption">
							<h3>Today
								<span>Discount</span>
							</h3>
							<p>Get Now
								<span>40%</span> Discount</p>
							<a class="button2" href="search_page.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- //banner -->
		<!---728x90--->
		
		
		<!--top products-->
		<div class="ads-grid">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l">Our Top Products
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>

				<?php if(isset($_GET['status']) & !empty($_GET['status'])){ 
			if($_GET['status'] == 'success'){

				// echo '<script language="javascript">';
				// echo 'alert("Item Successfully Added to Cart")';
				echo '<script>
    setTimeout(function() {
        swal({
			title: "Item Successfully Added to Cart!",
			icon: "success",
           
        }, function() {
            window.location = "index2.php";
        });
    }, 1000);
</script>';
					
			}elseif ($_GET['status'] == 'incart') {
				
				echo '<script>
    setTimeout(function() {
        swal({
            title: "Item is Already Exists in Cart!",
            
        }, function() {
            window.location = "index2.php";
        });
    }, 1000);
</script>';
			}elseif ($_GET['status'] == 'failed') {
				
				echo '<script>
    setTimeout(function() {
        swal({
            title: "Failed to Add item, try to Add Again!",
           
        }, function() {
            window.location = "index2.php";
        });
    }, 1000);
</script>';
			}
	}
?>
            <!--Item slider text-->
            <?php 
                while($row = mysqli_fetch_array($cat)){
            ?>
            <div class="container">
                <div class="row">
            	    <div class="col-md-12 text-center">
            	        <br/><br/><br/>
						<p><?php echo $row['catogory']; ?></p>
					
            	        <hr/>
            	    </div>
            	</div>
            	<div class="row">
            		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            <?php $q = "SELECT * FROM products WHERE catogory = '" . $row['catogory'] . "' ";
                            $sp = $conn->query($q);
                            while ($pr = $sp->fetch_assoc()) { ?>
                            <div class="item men-thumb-item">
                                <div class="pad15 ">
								<p  class="lead"><img src="uploads/<?php echo $pr['image']; ?>" alt="img" style="height:170px;width:110px;"><br></p>
									<div class="lead"><?php echo $pr['name']; ?></div>
									
                                    <div class="info-product-price">
                                        <?php $d=$pr['discountper'];
                                            if($d>0){
            								echo'<span class="item_price">€'.$pr["dprice"]. '.00</span><del>€ '.$pr["price"]. '.00</del>';
                                                           
                                            }else{
            								echo '<span><b>€ '. $pr['price'].'.00</b></span>';
            								}
											?>
											
									</div>
									
									
							         <!-- [CART] -->
      									
									<!--<p>50% off</p>-->
									
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
											<!-- <a href="single.php?id=<?php echo $pr['slno']; ?>&catogory=<?php echo $pr['catogory'];?>" class="link-product-add-cart">Add To Cart</a> -->
											<a href="addtocart.php?id=<?php echo $pr['slno']; ?>" class="link-product-add-cart">Add To Cart</a>
											<!-- <a href="addtocart.php?id=<?php echo $pr['slno']; ?>" class="btn btn-primary" role="button">Add to Cart</a> -->
											<!-- <a href="#small-dialog1" class="btn btn-primary" data-toggle="modal" data-target="#myModal23">Add to Cart</a> -->
											<input type="button" name="view" value="Quick View" id="<?php echo $pr["slno"]; ?>" class="btn btn-info btn-xs view_data" style="height:40px; width:110px;"/> 
 
                                        </div>
                                    </div>
								</div>
								  
                            </div>
                            <?php } ?>
                        </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                    </div>
            	</div>
            </div>
            <?php } ?>
            <!-- Item slider end-->
		</div>
		<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
					 <h4 class="modal-title">Product Details</h4>  
					 
                </div>  
                <div class="modal-body" id="product_detail">  
				</div> 
			
				<div class="modal-footer">  
				
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
				
                </div>  
           </div>  
      </div>  
 </div>  
        <!--// top products-->
        
        <!-- special offers -->
		<div class="featured-section" id="projects">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l">Special Offers
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
				<!-- //tittle heading -->

				<div class="content-bottom-in">

					<ul id="flexiselDemo1">
						<?php while ($row2 = mysqli_fetch_array($sql2)) { ?>
							<li>
								<div class="w3l-specilamk">
									<div class="speioffer-agile">
										<a href="single.php">
											<img src="uploads/<?php echo $row2['image']; ?>" alt="" style="height:170px;width:110px;">
										</a>
									</div>
									<div class="product-name-w3l">
										<h4>
											<a href="single.php?id=<?php echo $row2['slno'] ?>&catogory=<?php echo $row2['catogory'];?>"><?php echo $row2['name']; ?>, 5g</a>
										</h4>
										<div class="w3l-pricehkj">
                						    <?php $p=$row2['discountper'];
                							    if($p>0){
                								    echo'<h6 €'.$row2["price"]. '.00</h6>';
                								}else{
                									echo'<p>€'.$row2['dprice'].'</p>';
                								}
                							?>
											<!--<h6><i class="fa fa-euro-sign"></i><?php echo $row2['dprice']; ?></h6>-->
											<del><?php echo $row2['price'] == $row2['dprice'] ? "" : $row2['price'] ;?></del>
										
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="#" method="post">
												<!--<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Aashirvaad, 5g" />
													<input type="hidden" name="amount" value="€<?php echo $row2['dprice']; ?>" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>-->
											</form>
										</div>
									</div>
								</div>
							</li>
						<?php } ?>
					</ul>

				</div>
			</div>
		</div>

		<!-- //special offers -->
		<!---728x90--->
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
		<!-- footer -->
		<footer>
			<div class="container">
				<div class="footer-info w3-agileits-info" style="margin-top:00px">
					<!-- footer categories -->
					<div class="col-sm-5 address-right">
						<div class="col-xs-6 footer-grids">
							<h3 style="margin-left: 100px">Categories</h3>
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
									<a href="index.php">Help</a>
								</li>
								
								<li>
									<a href="index.php">Terms of use</a>
								</li>
								<li>
									<a href="index.php">Privacy Policy</a>
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

					</div>
					<!-- //social icons -->
					<div class="clearfix"></div>
				</div>
				<!-- //footer third section -->
				<!-- footer fourth section (text) -->
				<div class="agile-sometext">
					<div class="sub-some">

					</div>
					<div class="sub-some">
						<h5>Shop online with the best deals & offers</h5>
						<p>Now Get Upto 40% Off On Everyday Essential Products Shown On The Offer Page. The range includes Super Express, Personal Care,
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
					<a href="https://ictcodes.net/"> ictcodes.</a>
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
        
        <!-- js-files -->
		<!-- jquery -->
	
		<!--<script src="js/minicart.js"></script>
		<script>
			paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

			paypalm.minicartk.cart.on('checkout', function(evt) {
				var items = this.items(),
					len = items.length,
					total = 0,
					i;

				// Count the number of each item in the cart
				for (i = 0; i < len; i++) {
					total += items[i].get('quantity');
				}

				if (total < 3) {
					alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
					evt.preventDefault();
				}
			});
		</script>-->
		<!-- //cart-js -->
		
		<!-- flexisel (for special offers) -->
		<script src="js/jquery.flexisel.js"></script>
		<script>
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 3,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint: 480,
							visibleItems: 1
						},
						landscape: {
							changePoint: 640,
							visibleItems: 2
						},
						tablet: {
							changePoint: 768,
							visibleItems: 2
						}
					}
				});

			});
		</script>
		<!-- //flexisel (for special offers) -->

		<!-- password-script -->
		<script>
			window.onload = function() {
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
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();

					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 100);
				});
			});
		</script>
		<!-- //end-smooth-scrolling -->

		<!-- smooth-scrolling-of-move-up -->
		<script>
			$(document).ready(function() {

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
		
		
		<!--product carousel-->
        <script>
           $(document).ready(function () {
                var itemsMainDiv = ('.MultiCarousel');
                var itemsDiv = ('.MultiCarousel-inner');
                var itemWidth = "";
            
                $('.leftLst, .rightLst').click(function () {
                    var condition = $(this).hasClass("leftLst");
                    if (condition)
                        click(0, this);
                    else
                        click(1, this)
                });
            
                ResCarouselSize();
            
            
            
            
                $(window).resize(function () {
                    ResCarouselSize();
                });
            
                //this function define the size of the items
                function ResCarouselSize() {
                    var incno = 0;
                    var dataItems = ("data-items");
                    var itemClass = ('.item');
                    var id = 0;
                    var btnParentSb = '';
                    var itemsSplit = '';
                    var sampwidth = $(itemsMainDiv).width();
                    var bodyWidth = $('body').width();
                    $(itemsDiv).each(function () {
                        id = id + 1;
                        var itemNumbers = $(this).find(itemClass).length;
                        btnParentSb = $(this).parent().attr(dataItems);
                        itemsSplit = btnParentSb.split(',');
                        $(this).parent().attr("id", "MultiCarousel" + id);
            
            
                        if (bodyWidth >= 1200) {
                            incno = itemsSplit[3];
                            itemWidth = sampwidth / incno;
                        }
                        else if (bodyWidth >= 992) {
                            incno = itemsSplit[2];
                            itemWidth = sampwidth / incno;
                        }
                        else if (bodyWidth >= 768) {
                            incno = itemsSplit[1];
                            itemWidth = sampwidth / incno;
                        }
                        else {
                            incno = itemsSplit[0];
                            itemWidth = sampwidth / incno;
                        }
                        $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                        $(this).find(itemClass).each(function () {
                            $(this).outerWidth(itemWidth);
                        });
            
                        $(".leftLst").addClass("over");
                        $(".rightLst").removeClass("over");
            
                    });
                }
            
            
                //this function used to move the items
                function ResCarousel(e, el, s) {
                    var leftBtn = ('.leftLst');
                    var rightBtn = ('.rightLst');
                    var translateXval = '';
                    var divStyle = $(el + ' ' + itemsDiv).css('transform');
                    var values = divStyle.match(/-?[\d\.]+/g);
                    var xds = Math.abs(values[4]);
                    if (e == 0) {
                        translateXval = parseInt(xds) - parseInt(itemWidth * s);
                        $(el + ' ' + rightBtn).removeClass("over");
            
                        if (translateXval <= itemWidth / 2) {
                            translateXval = 0;
                            $(el + ' ' + leftBtn).addClass("over");
                        }
                    }
                    else if (e == 1) {
                        var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                        translateXval = parseInt(xds) + parseInt(itemWidth * s);
                        $(el + ' ' + leftBtn).removeClass("over");
            
                        if (translateXval >= itemsCondition - itemWidth / 2) {
                            translateXval = itemsCondition;
                            $(el + ' ' + rightBtn).addClass("over");
                        }
                    }
                    $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
                }
            
                //It is used to get some elements from btn
                function click(ell, ee) {
                    var Parent = "#" + $(ee).parent().attr("id");
                    var slide = $(Parent).attr("data-slide");
                    ResCarousel(ell, Parent, slide);
                }
            
            });
        </script>
        <!--// product carousel-->
    </body>
</html>