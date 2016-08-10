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

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

   $sql = "UPDATE users SET password='$password', email='$email', phone=$phone WHERE name='$name'";
   $result = mysqli_query($conn, $sql);
if ($result) {
   $json = array('result'=>$result);
   echo json_encode($json);
} else {
   $json = array('result'=>$result);
   echo json_encode($json);
}

$conn->close();