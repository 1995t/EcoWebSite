<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "mydata"; 
 $conn = new mysqli($servername,$username,$password,$database);
 if($conn->connect_error)
 {
	 die("Connection failed".$conn->connect_error);
	 echo "<br><br>";
	 }
 if($conn)
 {
	//echo "Connection established successfully."."<br><br>"; 

    }
?>	  