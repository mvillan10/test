<html>
   <head>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
       <body>
<?php 
session_start();
include "db.php";

if (isset($_POST['login'])) {
	$user = $_POST['user'];
	$password = $_POST['password'];
	
	

	$login = mysqli_query($conn, "SELECT * from user where name='$user' and password='$password' ");
	$row = mysqli_num_rows($login);
	$array = mysqli_fetch_array($login);

	if ($row == 1) {
		
		$_SESSION['username'] = $user;
		$_SESSION['id'] = $array['id'];
		echo '<script>
		window.history.go(-1);
		</script>';
	} else {
		echo '<script>
    setTimeout(function() {
        swal({
            title: "Invalid Username or Password!",
            icon: "error",
           
        }, function() {
            window.location = "index.php";
        });
    }, 1000);
</script>';

	}
}


?>
 </body>
      
       
       
   </head> 
</html>


