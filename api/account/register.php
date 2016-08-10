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
      $name = $data['name'];
      $password = $data['password'];
      $email = $data['email'];
      $phone = $data['phone'];
          break;  
    }
    
    
    
    
    
    
    
    
    
    
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