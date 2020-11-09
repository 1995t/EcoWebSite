<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mytestdb";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="CREATE TABLE MYUsers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname varchar(30) NOT NULL,
lastname varchar(30) NOT NULL,
email varchar(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if($conn->query($sql)===TRUE){
    echo "table MYUsers created sucessfully";
}
else{
    echo "error in creating the table".$conn->error;
}
$conn->close();


?>