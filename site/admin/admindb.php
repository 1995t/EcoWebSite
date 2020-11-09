<?php
 $admin_host = 'localhost';
 $admin_user = 'root';
 $admin_pass = '';
 $admin_db ='admin';
 $connect = new mysqli($admin_host,$admin_user,$admin_pass);
 if($connect)
   {
	// echo "Connected successfully.<br><br>";
	  if($connect->select_db($admin_db))
	     {
		//  echo "Database connected.<br><br>";
	       }
	  else
	    {
		  echo "Database does not exists"."<br><br>";
		  if($connect->query("create database $admin_db"))
		  {
			  $connect->select_db($admin_db);
			  echo "Database selected.<br><br>";
		     }
		  else
		  { 	  
		    echo "Error while creating database.<br><br>";
		     }
	      }
      }
 else
   {	
      die('Connect Error'.mysqli_error($connect));
      }
?>