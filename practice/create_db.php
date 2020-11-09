<?php
$servername = "localhost";
$username="root";
$password="";

//creating connection
$conn=new mysqli($servername, $username, $password);

//check connection
if($conn->connect_error){
    die("connection_failed".$conn->connect_error);
}
$sql="CREATE DATABASE mytestdb";
if($conn->query($sql)===TRUE){
    echo "succesfully database is created";
}
else{
    echo "error while creating database ".$conn->error;
}
$conn->close();
