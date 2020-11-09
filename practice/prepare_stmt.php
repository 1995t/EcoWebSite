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
//prepare and bind
$stmt=$conn->prepare("INSERT INTO MYUsers(firstname,lastname,email)VALUES(?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);
$firstname="Rajesh";
$lastname="Routhu";
$email="rajeshrouthu@gmail.com";
$stmt->execute();

$firstname="Sudheer";
$lastname="Satwik";
$email="sudheer@gmail.com";
$stmt->execute();
echo "New records created successfully";

$stmt->close();
$conn->close();
?>