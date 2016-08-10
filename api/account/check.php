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

$sql = "SELECT * FROM users WHERE name='$name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if ($row) {
   $json = array('result'=>$row);
   echo json_encode($json);
} else {
   $json = array('result'=>$row);
   echo json_encode($json);
}

$conn->close();