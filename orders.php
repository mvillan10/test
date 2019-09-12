<html>
   <head>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<?php
require_once 'db.php';
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
echo $r;

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $add=$_POST['add'];
}
$query = "INSERT INTO orders 
                    (order_id,user_id,user_name,date, product_name, quantity, totalprice, address, phone, status)
                        VALUES('$order_id','$user_id', '$user_name', now(), '$product_name', '$quantity', '$totalPrice', '$address', '$phone','Pending')";
    // echo $query;
     
    if ($conn->query($query) === TRUE) {
        ++$count;
    } else {
        echo $conn->error;
    }
    

?>