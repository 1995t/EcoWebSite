<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mytestdb";

$conn=new mysqli($servername,$username, $password, $dbname);
if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
}
$sql="INSERT INTO MYUsers(firstname,lastname,email) VALUES('tarun','kumar','tarun.bugata@gmail.com')";
if($conn->query($sql)===TRUE){
    echo "data inserted";
}
else{
    echo "error while inserting the data" .$sql."<br>".$conn->error;
}
$conn->close();
?>