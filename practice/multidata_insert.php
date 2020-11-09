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
$sql = "INSERT INTO MyUsers (firstname, lastname, email)
VALUES ('Ramu', 'Rocks', 'ramu@gmail.com');";
$sql .= "INSERT INTO MyUsers (firstname, lastname, email)
VALUES ('hari', 'Chandan', 'harichandan@gmail.com');";
$sql .= "INSERT INTO MyUsers (firstname, lastname, email)
VALUES ('Tarun', 'Kumar', 'tarun@gmail.com')";

if($conn->multi_query($sql)===TRUE){
echo "multiple records are added sucessfully";
}
else{
    echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>