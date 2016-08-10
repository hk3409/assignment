<?php
header('Access-Control-Allow-Origin:http://webapp.yourdomain.com');
header('Access-Control-Allow-Headers:X-Requested-With');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE');

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

$request_method = strtolower($_SERVER['REQUEST_METHOD']); 
switch ($request_method){  
  case 'delete':  
      parse_str(file_get_contents('php://input'), $data);  
      $id = $data['id'];
      break;  
    }

$sql = "DELETE FROM news WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
   $json = array('result'=>$result);
   echo json_encode($json);
} else {
   $json = array('result'=>$result);
   echo json_encode($json);
}

$conn->close();