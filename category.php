<?php
    session_start();
    include"db.php";

/*if(isset($_POST['signIn'])){
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $sql=" SELECT * from user where name='$username' and password='$password' ";
	 $result=mysqli_query($conn,$sql);
	 echo $row=mysqli_num_rows($result);
	 if($row==1){

		 header('location:index.php');
		 
	 }

	 else{
		echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">swal("Incorrect username or password!");</script>
		<script>setTimeout(function(){window.location.href="about.php"},3000)</script>';
	 }
}

if(isset($_POST['signUp'])){
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $address1=$_POST['address1'];
 $address2=$_POST['address2'];
 $pincode=$_POST['pincode'];

$insertQ="INSERT INTO user(date,name,email,phone,password,address1,address2,pincode) VALUES (now(),'$username','$email','$phone','$password','$address1','$address2','$pincode')";
$resultI=mysqli_query($conn,$insertQ);
{
	header('location:about.php');
}
if($resultI){
	// echo "success";
	
}
else{
	echo "error $insertQ.".mysqli_error($conn);
}
}*/

$id = $_GET['id'];

$sql1="select * from catogory_master where slno='$id' ";
// echo $sql1;exit();

$catogory = mysqli_query($conn, "SELECT * from catogory_master ORDER BY catogory asc");
$nrow = mysqli_num_rows($catogory);

$result = $conn->query($sql1);
$result = $result->fetch_row();
$category = $result['2'];
// echo $category;
$sql="select * from products where catogory='$category' ";
// echo $sql; exit();
$view = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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
		

	<!--multislider-->
	<link href="multislider/css/custom.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

   <script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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


	<script>
		(function() {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
			}
		})();
	</script>
	<script>
		(function() {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
			}
		})();
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
	<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>

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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
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
					<!-- <?php 
					//if(isset($_POST['search'])){
					   // echo $key = $_POST['key'];
					    //$search = mysqli_query($conn,"SELECT * from products WHERE catogory = $key") ;
					    //echo $result = mysqli_num_rows($search);
					    /*$result = mysqli_fetch_array($search);
					    echo $result['name'];*/
					//}
					?> -->
					<div class="agileits_search">
						<!--<form action="" method="POST">-->
						<!--	<input name="key" type="search" placeholder="How can we help you today?" required="">-->
						<!--	<button type="submit" name="search" class="btn btn-default" aria-label="Left Align">-->
						<!--		<span class="fa fa-search" aria-hidden="true"> </span>-->
						<!--	</button>-->
						<!--</form>-->
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
								<button class="w3view-cart" type="submit" name="submit" value="">
									<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
								</button>
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
	
	<!-- search products -->
	<div class="ads-grid">
		<div class="container">
		   
			<!-- tittle heading -->
			<?php $row_null = mysqli_num_rows($view);
		if( $row_null == 0 ){
		  header("Location:index.php");
		  

	    // $message = "nothing was found";
        // echo "<script type='text/javascript'>alert('$message');</script>";
    
          echo'<script>
                setTimeout(function() {
                    swal({
                        title: "sorry!",
                        text: "nothing was found!",
                        type: "error"
                        }, function() {
                            window.location = "index.php";
                        });
                        }, 1000);
                    </script>';
		}
		else{
		?>
		<?php
		$cat = mysqli_query($conn,"select catogory from catogory_master where slno = '$id' ");
		$cat_row = mysqli_fetch_array($cat);
		?>
			<h3 class="tittle-w3l"><?php echo $cat_row['catogory'] ?>
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
		<div class="row" style="padding:2rem;">
	    <?php 
	        
	        while($row2=mysqli_fetch_array($view)){
	    ?>
	    
    	    <div class="col-sm-2 col-lg-3" style="height:20rem; width:20rem;">
        	    <div class="card men-thumb-item">
                    <img class="card-img-top" src="uploads/<?php echo $row2['image']; ?>" alt="Card image cap" style="height:10rem; width:7rem; padding-bottom:2rem;" > 
                    <div class="card-body">
                        <p class="card-text ">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.php?id=<?php echo $row2['slno'];?>&catogory=<?php echo $row2['catogory'];?>" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="item_price"> </i> <?php echo $row2['name']; ?></span>
                            <div class="info-product-price">
                                <!--<span class="item_price"> </i>€ <?php echo $row2['dprice']; ?></span>-->
                                <!--<del><i class="fas fa-euro-sign"></i> <?php echo $row2['price']; ?></del>-->
                                <?php $d=$row2['discountper'];
                                              if($d>0){
												echo'<span class="item_price">€'.$row2["dprice"]. '.00</span><del>€ '.$row2["price"]. '.00</del>';
                                               
                                              }else{
												echo '<span><b>€ '. $row2['price'].'.00</b></span>';
												
											  }
                                           ?>
                            </div>
                        </p>
                    </div>
                    <!--<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post" action="add-to-cart.php">
                            <fieldset>
								
                                    <a href="cart.php?id=<?php echo $row['slno']; ?>&catogory=<?php echo $row['catogory'];?>"><input type="button" name="submit" value="Add to cart" class="button" /> </a>
                            </fieldset>
                        </form>
                    </div>-->
                </div>
            </div>
	    <?php }} ?>
    </div>  
				

				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){

// Lift card and show stats on Mouseover
$('#product-card').hover(function(){
		$(this).addClass('animate');
		$('div.carouselNext, div.carouselPrev').addClass('visible');			
	 }, function(){
		$(this).removeClass('animate');			
		$('div.carouselNext, div.carouselPrev').removeClass('visible');
});	

// Flip card to the back side
$('#view_details').click(function(){		
	$('div.carouselNext, div.carouselPrev').removeClass('visible');
	$('#product-card').addClass('flip-10');
	setTimeout(function(){
		$('#product-card').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
			$('#product-front, #product-front div.shadow').hide();			
		});
	}, 50);
	
	setTimeout(function(){
		$('#product-card').removeClass('flip90').addClass('flip190');
		$('#product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
		setTimeout(function(){				
			$('#product-card').removeClass('flip190').addClass('flip180').find('div.shadow').hide();						
			setTimeout(function(){
				$('#product-card').css('transition', '100ms ease-out');			
				$('#cx, #cy').addClass('s1');
				setTimeout(function(){$('#cx, #cy').addClass('s2');}, 100);
				setTimeout(function(){$('#cx, #cy').addClass('s3');}, 200);				
				$('div.carouselNext, div.carouselPrev').addClass('visible');				
			}, 100);
		}, 100);			
	}, 150);			
});			

// Flip card back to the front side
$('#flip-back').click(function(){		
	
	$('#product-card').removeClass('flip180').addClass('flip190');
	setTimeout(function(){
		$('#product-card').removeClass('flip190').addClass('flip90');

		$('#product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
			$('#product-back, #product-back div.shadow').hide();
			$('#product-front, #product-front div.shadow').show();
		});
	}, 50);
	
	setTimeout(function(){
		$('#product-card').removeClass('flip90').addClass('flip-10');
		$('#product-front div.shadow').show().fadeTo( 100 , 0);
		setTimeout(function(){						
			$('#product-front div.shadow').hide();
			$('#product-card').removeClass('flip-10').css('transition', '100ms ease-out');		
			$('#cx, #cy').removeClass('s1 s2 s3');			
		}, 100);			
	}, 150);			
	
});	


/* ----  Image Gallery Carousel   ---- */

var carousel = $('#carousel ul');
var carouselSlideWidth = 335;
var carouselWidth = 0;	
var isAnimating = false;

// building the width of the casousel
$('#carousel li').each(function(){
	carouselWidth += carouselSlideWidth;
});
$(carousel).css('width', carouselWidth);

// Load Next Image
$('div.carouselNext').on('click', function(){
	var currentLeft = Math.abs(parseInt($(carousel).css("left")));
	var newLeft = currentLeft + carouselSlideWidth;
	if(newLeft == carouselWidth || isAnimating === true){return;}
	$('#carousel ul').css({'left': "-" + newLeft + "px",
						   "transition": "300ms ease-out"
						 });
	isAnimating = true;
	setTimeout(function(){isAnimating = false;}, 300);			
});

// Load Previous Image
$('div.carouselPrev').on('click', function(){
	var currentLeft = Math.abs(parseInt($(carousel).css("left")));
	var newLeft = currentLeft - carouselSlideWidth;
	if(newLeft < 0  || isAnimating === true){return;}
	$('#carousel ul').css({'left': "-" + newLeft + "px",
						   "transition": "300ms ease-out"
						 });
	isAnimating = true;
	setTimeout(function(){isAnimating = false;}, 300);			
});
});
</script>
	</div>  
	
	
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
									<a href="category.php">Privacy Policy</a>
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
    <!-- js-files -->
	<!-- jquery -->
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
	<!-- Include jQuery -->
    
    <!-- Initialize element with Multislider -->
    
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
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
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
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