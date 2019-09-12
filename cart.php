<?php
session_start();
include "db.php";
$catogory = mysqli_query($conn, "SELECT * from catogory_master ORDER BY catogory");
$nrow = mysqli_num_rows($catogory);




?>
<!DOCTYPE html>
<html lang="zxx">

	<head>
		<title>Super Express </title>
		<!--/tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.city {display:none}
</style>
		
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
	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
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

<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
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
						<!-- <li>
							
								<span class="fa fa-unlock-alt" aria-hidden="true"></span><?php echo $_SESSION['id']? $_SESSION['username']: '<a href="#" data-toggle="modal" data-target="#myModal1"> SignIn&SignUp  </a>' ?>  
						</li> -->
						<!-- <li>
							<a href="#" data-toggle="modal" data-target="#myModal2">
								<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
						</li> -->
						<!-- <?php echo $_SESSION['id'] ? '<li>
							<a href="user_logout.php">
								<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Logout </a>
						</li>' : "" ; ?>
							<?php echo $_SESSION['id'] ? '<li>
							<a href="user_order.php">
								<span class="fa fa-cart-arrow-down" aria-hidden="true"></span> My Orders</a>
						</li>' : "" ; ?> -->
						<li>
							<a href="#" data-toggle="modal" data-target="#">
								<!-- <span class="fa fa-language fa-3x" aria-hidden="true"></span> Français</a> -->
								<div id="google_translate_element"></div>
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
						 <a href=""><button class="w3view-cart" style="float: right;"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</div></tr>
				
					</table>    
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	
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
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
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
								<li>
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
							<a href="index2.php">HOME</a>
							<i>|</i>
						</li>
						<li>CART</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- //page -->
		<!---728x90--->

		<!-- Single Page -->
		<!-- <div class="banner-bootom-w3-agileits"> -->
		<div class="container" style=padding-top:85px;>
<?php
include 'db.php';
// session_start();
$items = $_SESSION['cart'];
$qty=$_GET['qty'];
unset($cartitems);
$cartitems = explode(",", $items);
// print_r($cartitems);
if(isset($_POST['qtyy'])) {
	$a=$_POST['qtyy'];
	// foreach ($_POST['qtyy'] as $qty) {
		
	// echo $qty;
	$q=array($a);
	// print_r($q);	
	// }
	
}
if(isset($_POST['price'])) {
	 $pr=$_POST['price'];
	
		$p=array($pr);
		// print_r($p);
	
	}
$quantity = $_POST['qtyy'];
$price = $_POST['price'];
$total_price = array();
$len = count($quantity);
for ($i=0; $i<$len; $i++) {
    $total_price[] = $price[$i] * $quantity[$i];
}
// print_r($total_price);
$summ=array_sum($total_price);
// echo $summ;
?>
    <div class="row">
		<a href="index2.php"><button class="btn btn-info">BACK</button></a>
		<form action="" method="post">

      <table class="table" id="myTable">
    
          <tr>
            <tr>
            <tr>
              <th>S.NO</th>
              <th>Item Name</th>
              <th>Quantity</th>
							<th>Price/Quantity</th>
              <th>Action</th>
          
          </tr>
          
        <?php
        $total = '';
        $i=1;
         foreach ($cartitems as $key=>$id) {
            $sql = "SELECT * FROM products WHERE slno = $id";
            $res=mysqli_query($conn, $sql);
            $r = mysqli_fetch_assoc($res);
						$b[]=$r['price'];
						if (empty($id)) {
							echo "<script>
							window.alert('your cart is empty');
							window.history.go(-1); 
							</script>";
						}
					
						// array_shift($r);
						// print_r($b);
						// print_r($r);
					// print_r($removed);
           
						// $v= $r['price'];
						// echo $p=implode(",",$b);
						// $sum = array_sum($b);
						// echo $v[0];
						// array_push($r,'qty');
						// print_r($r);

						$sum = array_sum($b);
						
            $i++;
        ?>          
          <tr>
              <td><?php echo $i; ?></td>
							<td name="pname"><?php echo $r['name']; ?></td>
							<td><input type="number" value="<?php echo $qty; ?>" name="qtyy[]"> </td>
							<td><input type="number" readonly value="<?php echo $r['price']?>" name="price[]"></td>
              <td><a href="delcart.php?remove=<?php echo $key; ?>"><button type="button" class="btn btn-danger">Remove</button></a> </td>
                
					</tr>
					
        
            <?php } ?>
        
        <tr>
					
            
            
						<td></td><td></td>
						<td><button type="submit" class="btn btn-info">Update</button>
					
						<td style="font-size:21px;"><strong>Total Price</strong></td>
						<td style="font-size:21px;" name="sum"><strong>$ <?php echo $summ; ?></strong></td>
      </table>
		</form>
				 
	
		<div class="w3-container"><br>
	<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue">Checkout</button>

<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">

  

  <div class="w3-bar w3-border-bottom form-group">
   <button class="tablink w3-bar-item w3-button btn btn-info"   onclick="openCity(event, 'phone')">SignUp with Phone number</button>
   <button class="tablink w3-bar-item w3-button btn btn-info" style="padding-left:60px;" onclick="openCity(event, 'email')">SignUp with Email</button>
   <!-- <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Tokyo')">Tokyo</button> -->
  </div>

  <div id="phone" class="w3-container city">
   <!-- <h1>SignUp with Phone number</h1> -->
   <form action="" method="post" class="form-group">
   <section class="form-simple">

<!--Form with header-->
<div class="card">

  <!--Header-->
  <div class="header pt-3 grey lighten-2">

    <div class="row d-flex justify-content-start">
      <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5" style="padding-left:27px;">SignUp with Phone number</h3>
    </div><br>

  </div>
  <!--Header-->

  <div class="card-body mx-4 mt-4">

    <!--Body-->
    <div class="md-form">
      <input type="text" name="name"  class="form-control">
      <label for="Form-email4">Your Name</label>
    </div>
    <div class="md-form">
      <input type="text" name="phone"  class="form-control">
      <label for="Form-email4">Your Phone number</label>
    </div>

    <div class="md-form pb-3">
    <textarea class="form-control" name="add" rows="5" ></textarea>
      <label for="Form-pass4">Your Delivery Address</label>
    </div>

    <div class="text-center mb-4">
			<!-- <button type="button" class="btn btn-danger btn-block z-depth-2">SignUp</button> -->
			<input type="submit" class="btn btn-danger btn-block z-depth-2" name="submit" value="SignUp">
    </div>
    

  </div>

</div>
<!--/Form with header-->

</section>
	</form>
   
  </div>

  <div id="email" class="w3-container city">
  <!-- <h1>SignUp with Email</h1> -->
  <form action="#" method="post">
  <section class="form-simple">

<!--Form with header-->
<div class="card">

  <!--Header-->
  <div class="header pt-3 grey lighten-2">

    <div class="row d-flex justify-content-start">
      <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5" style="padding-left:27px;">SignUp with Email</h3>
    </div>

  </div>
  <!--Header-->

  <div class="card-body mx-4 mt-4">

    <!--Body-->
    <div class="md-form">
      <input type="text" name="name" id="Form-email4" class="form-control">
      <label for="Form-email4">Your Name</label>
    </div>
    <div class="md-form">
      <input type="text" name="email" id="Form-email41" class="form-control">
      <label for="Form-email4">Your Email</label>
    </div>
    <div class="md-form">
      <input type="text" name="phone" id="Form-email42" class="form-control">
      <label for="Form-email4">Your Phone number</label>
    </div>

    <div class="md-form pb-3">
    <textarea class="form-control" name="add" rows="5" id="comment"></textarea>
      <label for="Form-pass4">Your Delivery Address</label>
      <!-- <p class="font-small grey-text d-flex justify-content-end">Forgot <a href="#" -->
          <!-- class="dark-grey-text font-weight-bold ml-1"> Password?</a></p> -->
    </div>

    <div class="text-center mb-4">
      <button type="button" class="btn btn-danger btn-block z-depth-2">SignUp</button>
    </div>
    

  </div>

</div>
<!--/Form with header-->

</section>
	</form>
  </div>

  

  <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-button w3-right w3-white w3-border" 
   onclick="document.getElementById('id01').style.display='none'">Close</button>
  </div>
 </div>
</div>

</div>
<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
//   for (i = 0; i < x.length; i++) {
//     tablinks[i].classList.remove("w3-light-grey");
//   }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>

<?php
include 'db.php';
if(isset($_POST['submit'])) {
	
	
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $add=$_POST['add'];
 $email=$_POST['email'];

 $unique_id = rand() ;
 $date=date('Y-m-d H:i:s');
 $order_id=$unique_id;

 foreach ($cartitems as $key) {
	$product_name = $key['pname'];
	$quantity = $key['qtyy'];
	$totalPrice = $key['price'] * $item['qtyy'];
	
 $query = "INSERT INTO cart_order 
                    (order_id,user_name,date, product_name, quantity, total_price, address, phone,email, status)
                        VALUES('$order_id','$name',now(), '$product_name', '$quantity', '$totalPrice', '$add', '$phone','$email','Pending')";
    echo $query;
     
    if ($conn->query($query) === TRUE) {
        ++$count;
    } else {
        echo $conn->error;
		}
	}
		// $query1=mysqli_query($conn,"INSERT INTO order_count(date,custom_id,order_id,status) VALUES('$date','$user_id','$order_id','pending')");
}
?>
    </div>
				</div>
		<!-- </div> -->
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
									<a href="">Help</a>
								</li>
								
								<li>
									<a href="">Terms of use</a>
								</li>
								<li>
									<a href="">Privacy Policy</a>
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
					}, 1000);
				});
			});
		</script>
		<!-- //end-smooth-scrolling -->

		<!-- smooth-scrolling-of-move-up -->
		<script>
			$(document).ready(function() {
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

		<!-- imagezoom -->
		<script src="js/imagezoom.js"></script>
		<!-- //imagezoom -->

		<!-- FlexSlider -->
		<script src="js/jquery.flexslider.js"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

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

		<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
		<!-- //for bootstrap working -->
		<!-- //js-files -->
		
	</body>

</html>