
<html>
   <head>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
       <body>
           <?php 
include "db.php";

$uname=$_POST['name'];
$password=$_POST['password'];
 $phone=$_POST['phone'];
$email=$_POST['email'];
$add=$_POST['add'];
$pin=$_POST['pin'];

$sql=mysqli_query($conn,"INSERT INTO user(date,name,email,phone,password,address,pincode)values(now(),'$uname','$email','$phone','$password','$add','$pin')");
echo $row=mysqli_num_rows($sql);

// {
    
//     header( "location:index.php");
//     exit();
// }
if(!$row) {
    //     echo "Records inserted successfully.";
    // } else  {
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    // 
    
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Registration Completed!",
            
           
        }, function() {
            window.location = "index.php";
        });
    }, 1000);
</script>';

		}
// header( "location:index.php");

?>
           
       </body>
      
       
       
   </head> 
</html>