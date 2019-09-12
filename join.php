<?php
include'db.php';
$id = $_GET['id'];

$sql1="select * from catogory_master where slno='$id' ";
// echo $sql1;exit();

$result = $conn->query($sql1);
$result = $result->fetch_row();
$category = $result['2'];

$sql="select * from products where catogory='$category'";
// echo $sql; exit();

$view = $conn->query($sql);
 //echo $view;
if($view==TRUE){
  echo'sucess';
}
else{
  echo'no';
}
?>
<html>
  <body>
      <p><?php echo $catogory ?></p>
      <?php while ($row2 = mysqli_fetch_array($view)) { ?>
      <p><?php echo $row2['name']; ?></p>
       <p><?php echo $row2['catogory']; ?></p>
      <?php } ?>
  </body>
</html>