<?php
  include_once 'db.php';
  $query = "insert into users (Username,Password) VALUES ('Mark','mark')";
  $result = $conn->query($query);
  if($result)
   {
     echo "row inserted";
   }
   else
   {
      echo "Error in inserting data";
   }
?>