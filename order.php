<html>
   <head>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  
<body>


<?php
session_start();
$user_id = $_SESSION['id'];
// $user_id = 1; //for debug purpose or log in
require_once 'db.php';

$cart_q = "SELECT * FROM cart WHERE cid = $user_id";
$cart_items = $conn->query($cart_q);

$count = 0;
$products = '<table>
        <tr>
        <th>Date</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Total Amount</th>
        <th>Customer Address</th>
        <th>Customerr Phone</th>
        </tr>';
        
 $uname=$_POST['name'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $add=$_POST['add'];


// $sql=mysqli_query($conn,"UPDATE user SET name='$uname',phone='$phone',email='$email',address='$add' where id='$user_id'");
    
    $row=mysqli_num_rows($sql);
       
    $unique_id = rand() ;
    $date=date('Y-m-d H:i:s');
    foreach ($cartitems as $item) {
    $product_name = $item['pname'];
    $user_name = $item['cname'];
    $quantity = $item['quantity'];
    $totalPrice = $item['price'] * $quantity;
    $address = $item['address'];
    $phone = $item['phone'];

    $customerAddress = $address;
    $order_id=$unique_id;

    // $products .= "<tr>
    //                 <td>$product_name</td>
    //                 <td>$quantity</td>
    //                 <td>$totalPrice</td>
    //                 <td>$address</td>
    //                 <td>$phone</td>
    //             </tr>";
       
        

        $query = "INSERT INTO orders 
                    (order_id,user_id,user_name,date, product_name, quantity, totalprice, address, phone, status)
                        VALUES('$order_id','$user_id', '$user_name', now(), '$product_name', '$quantity', '$totalPrice', '$address', '$phone','Pending')";
    // echo $query;
     
    if ($conn->query($query) === TRUE) {
        ++$count;
    } else {
        echo $conn->error;
    }
    
    
    // $stocks = mysqli_query($conn, "SELECT * from products where name = '$product_name' ");
    // $stock = mysqli_fetch_array($stocks);
    // echo $new_stock = $stock['stock']- $quantity; 
    // $update_stock = mysqli_query($conn,"UPDATE products SET stock = $new_stock where name = '$product_name' ");
    
    } 


$query1=mysqli_query($conn,"INSERT INTO order_count(date,custom_id,order_id,status) VALUES('$date','$user_id','$order_id','pending')");


if ($count != 0) {
    
    $sql = mysqli_query($conn, " DELETE FROM cart WHERE cid = $user_id");
    
    //echo 'Your order has been placed successfully..!';
     echo '<script>
    setTimeout(function() {
        swal({
            title: "Your order has been submitted!",
           
        }, function() {
            window.location = "index.php";
        });
    }, 1000);
</script>';
    
    
} else {
    //echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    //echo 'Something went wrong..! try again;
    //go back script here
     echo '<script>
    setTimeout(function() {
        swal({
            title: "Please Select your Products!",
           
        }, function() {
            window.location = "index.php";
        });
    }, 1000);
</script>';
   
}
?>
 </body>
      
       
       
   </head> 
</html>
