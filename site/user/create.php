<?php
include_once 'db.php';
$query = "create table admin (id int(4) primary key,username varchar(20),password varchar(20))";
$result = $conn->query($query);
if($result)
  {
    echo "Table created";
     }
else
{
    echo "Error in creating table";
}     
?>