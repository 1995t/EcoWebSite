<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytestdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="DELETE FROM MYUsers WHERE id=1";
if($conn->query($sql)===TRUE){
    echo "record deleted successfully";
}
else{
    echo "ERROR in deleting records: ".$conn->error;   
}
$conn->close();
?>