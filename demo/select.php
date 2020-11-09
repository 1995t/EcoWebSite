<?php
  require_once 'connect.php';
  $query = "select * from new_users";
  if(!@mysqli_query($connect,$query))
    {
        echo "Could not execute query";
       }
    else
    {
       $result = mysqli_query($connect,$query);  
        
       while($row = mysqli_fetch_assoc($result))
        {
           
            echo "<table border='1'><tr><td>".$row['ID']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['date_of_birth']."</td><td>".$row['password']."</td><td>".$row['confirm_password']."</td></tr></table>";
            
          }
           
       }
?>