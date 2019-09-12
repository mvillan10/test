<?php  
 if(isset($_POST["slno"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "superexpress");  
      $query = "SELECT * FROM products WHERE slno = '".$_POST["slno"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
           
           <div class="col-md-5 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="uploads/'.$row['12'].'" >
									<div class="thumb-image">
										<img src="uploads/'.$row['12'].'" data-imagezoom="true" class="img-responsive" alt="">
									</div>
								</li>	
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
               
           
           <div class="col-md-7 single-right-left simpleCart_shelfItem">

					<h3> '.$row['2'].'</h3>
					
					<p>
						<span class="item_price">€ '.$row['8'].'</span>
						
						<label>Cash On delivery</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li>
								Cash on Delivery Eligible.
							</li>
							<!-- <li>
							Shipping Speed to Delivery.
						</li> -->
							<!-- <li>
							Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
						</li> -->
							<!-- <li>
							1 offer from
							<span class="item_price">$950.00</span>
						</li> -->
						</ul>
					</div>
					<div class="product-single-w3l">
						<p>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
							<label> '.$row['3'].'</label> product.</p>
						<ul>
							<li> '.$row['11'].'</li>
							<!-- <li>
							Best for Biryani and Pulao.
						</li>
						<li>
							After cooking, Zeeba Basmati rice grains attain an extra ordinary length of upto 2.4 cm/~1 inch.
						</li>
						<li>
							Zeeba Basmati rice adheres to the highest food afety standards as your health is paramount to us.
						</li>
						<li>
							Contains only the best and purest grade of basmati rice grain of Export quality.
						</li> -->
						</ul>
						<p>
							<i class="fa fa-refresh" aria-hidden="true"></i>All Products are
							<label>non-returnable.</label>
						</p>
						<p> Stock:<b>'.$row[10].'<b></p>
					</div>
					
					<form action="cart.php" method="get">
					Select Quantity:<input type="number" name="quantity" style="width:70px;"><br><br>
					<a href="addtocart.php?id='.$_POST["slno"].'" class="btn btn-info">Add To Cart</a>
					
					
					
					
					 <a href="single.php?id='.$_POST["slno"].'&catogory='.$row['3'].'"><button class="btn btn-success">More Details</button>
					 </form>
				</div>
               
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>