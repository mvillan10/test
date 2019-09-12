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
 
 

$email_from = $email;
$email_phone=$phone;
$email_subject = "New Order Received";
$email_body = "You have received a new message from the user<b><span style='color:red;font-size:18px;'> $uname.</span></b>\n".'<br>'.
   
     "phone no:<b><span style='color:red;font-size:18px;'> $phone.</b></span>\n".'<br>'.'<br>'.
$email_body= '<img src="http://super-express.be/images/logo2.png" width="175" height="65" alt="logo" /><br/>';
      
$to = "superexpressservice0@gmail.com";//
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
$headers  .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.



// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

// Subject of email sent to you.
$subject = 'Order Confirmation';

// Your email address. This is where the form information will be sent.
$emailadd = 'superexpressservice0@gmail.com';

$req = '0';
// Who should the confirmation email be from?

  $msg ='<span style="font-size:15px;">Hi </span>'.'<b style="font-size:18px;">'.$_POST['name'].'</b>'. "<span style='font-size:15px;'>,</span><p style='font-size:15px;'> Your Order has sucessfully placed. we will  
respond to your order as soon as possible.</p>".'<br>'."<p style='font-size:15px;'>Regards,<b><span>S</span><i>uper</i></b>
							<b><span>E</span><i>xpress</i></b></p>".'<br>'.

$msg.='<a href="http://super-express.be"><img src="http://superexpress.ictcodes.net/superExpress/images/logo2.png" width="175" height="65" alt="logo" /></a><br/>';
$msg .='<span style="text-align: left; color: #000000; font-family: Arial; font-size: 10pt; font-style: normal; font-weight: normal;">Mobile : +0032493481316 <font size="2" color="#B9B9B9">|</font> E-mail:superexpressservice0@gmail.com</span><font size="1" color="#BD1703"><br>';


$conf_subject = 'Your recent enquiry';
$conf_sender ="From: superexpress.com.<superexpressservice0@gmail.com> \r\n";
$conf_sender .= "MIME-Version: 1.0 \r\n";
$conf_sender .= "Content-type: text/html; charset=iso-8859-1 \r\n";
mail( $_POST['email'], $conf_subject,$msg, $conf_sender);


$sql=mysqli_query($conn,"UPDATE user SET name='$uname',phone='$phone',email='$email',address='$add' where id='$user_id'");
    
 $row=mysqli_num_rows($sql);
       
  $unique_id = rand() ;
  $date=date('Y-m-d H:i:s');
foreach ($cart_items as $item) {
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
