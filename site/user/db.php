<?php
  $mysql_host = 'localhost';
  $mysql_user = 'root';
  $mysql_password = '';
  $mysql_db = 'mydata';
  $conn = new mysqli($mysql_host,$mysql_user,$mysql_password);
  if($conn)
   {
      //echo 'Connected successfully'."<br><br>";
       if($conn->select_db($mysql_db))
         {
            //echo "Database selected"."<br><br>";
         }
          else
          {
              echo "Database does not exists"."<br><br>";
              if($conn->query("create database $mysql_db"))
                  {
                    $conn->select_db($mysql_db);
                    echo "Database selected"."<br><br>";
                  }
                  else
                  {
                    echo "Error while creating database. "."<br><br>";
                  }
          }  

          
      }
    else
     {
        die('Connect Error'.mysqli_error($conn));
       }
         
?>