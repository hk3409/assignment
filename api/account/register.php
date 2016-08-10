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

      $name = $_GET['name'];
      $password = $_GET['password'];
      $email = $_GET['email'];
      $phone = $_GET['phone'];
      
$sql = "INSERT INTO users SET name='$name', password='$password', email='$email', phone=$phone";
$result = mysqli_query($conn, $sql);

if ($result) {
   $json = array('result'=>$result);
   echo json_encode($json);
} else {
   $json = array('result'=>$sql);
   echo json_encode($json);
    echo $request_method;
}

$conn->close();