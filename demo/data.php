<?php
 include_once 'db.php';
 $data = mysqli_query($conn,"select * from users");
 if($data)
 {
   echo "Data inserted.";
   }
 else
 {
   echo "Error in inserting data.";
   }
?>