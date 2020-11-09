<?php
include_once 'db.php';
$query = "Update new_users set firstname = 'harish',lastname = 'harish' where ID ='1'"; 
$result = $conn->query($query);
if($result)
  {
    echo $result;  
    echo "row updated"."<br><br>";
  }
  else
  {
   echo "Error in updating table"."<br><br>";

  }
  $conn->close();
?>