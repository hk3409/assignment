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


$request_method = strtolower($_SERVER['REQUEST_METHOD']); 
switch ($request_method){  
  case 'put':  
      parse_str(file_get_contents('php://input'), $data);  
      $title = $data['title'];
      $img = $data['img'];
      $date = $data['date'];
      $content = $data['content'];
      break;  
    }
    
$sql = "INSERT INTO news SET title='$title', img='$img', date='$date', content='$content'";
$result = mysqli_query($conn, $sql);
if ($result) {
   $json = array('result'=>$result);
   echo json_encode($json);
} else {
   $json = array('result'=>$result);
   echo json_encode($json);
}

$conn->close();