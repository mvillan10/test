<?php 
session_start();
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
// print_r($cartitems);
// echo $cartitems;
if(isset($_GET['remove']) & empty($_GET['remove'])){
	$delitem = $_GET['remove'];
	unset($cartitems[$delitem]);
	$itemids = implode(",", $cartitems);
	echo $itemids;
	$_SESSION['cart'] = $itemids;
	
}
header('location:cart.php');