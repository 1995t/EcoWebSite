<?php
  $mysql_host = 'localhost';
  $mysql_user = 'root';
  $mysql_password = '';
  $mysql_db = 'mydata';

 $connect = mysqli_connect($mysql_host,$mysql_user,$mysql_password); 
  
  if(!mysqli_connect($mysql_host,$mysql_user,$mysql_password))
   {
       die('Could not connect to mysql server.'); 
      }
   else
   { 
      if(!mysqli_select_db($connect,$mysql_db))
        {
           die('Could not connect to database');
            }  
        else
         {
             echo "Connected successfully"."<br><br>";
         }    
      }   
?>