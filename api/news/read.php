<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "305cde";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($_GET['id']){
  $id=$_GET['id'];
  $sql = "SELECT * FROM news WHERE id=$id";  
} else {
  $sql = "SELECT * FROM news";
}

$result=mysqli_query($conn,$sql);
if ($result){
  while ($row=mysqli_fetch_assoc($result))
    {
    $json[] = $row;
    }
    echo json_encode(array('result'=>$json));
}


$conn->close();