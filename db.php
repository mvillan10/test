<?php
$servername="localhost";
// $username="superexpress";
$username="root";
$password="";
$dbname="superexpress";

$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//  echo "Connected successfully";

?>