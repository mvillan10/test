<?php
    $key=$_GET['key'];
    $array = array();
    // $con=mysqli_connect("localhost","root","","superexpress");
    include'db.php';
    $query=mysqli_query($conn, "select * from products where name LIKE '%{$key}%' OR catogory LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['name'];
      $array[] = $row['catogory'];
    }
    echo json_encode($array);
    mysqli_close($conn);
?>
