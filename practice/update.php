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
$sql="UPDATE MYUsers SET lastname='sid' where id=8";
if($conn->query($sql)===TRUE){
    echo "record updated succesfully";
}
    else{
        echo "error updating record: ".$conn->error;
    }
$conn->close();
?>