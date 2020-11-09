<?php
  include_once 'db.php';
  $sql = "select * from users";
  $result = $conn->query($sql);
  if($result->num_rows > 0)
   {
     while($row = $result->fetch_assoc())
           {
               echo "<table border='1'><tr><td>".$row['ID']."</td><td>".$row['Username']."</td><td>".$row['Password']."</td></tr></table><br>";
           }
     }
 $conn->close();
?>




