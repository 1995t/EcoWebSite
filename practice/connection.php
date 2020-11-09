 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br><br>";
$sql = "create database myproject";
if($conn->query($sql)===TRUE)
   {
    echo "Database created successfully"."<br><br>";
     }
else
    {
     echo "error while creating database ".$conn->error."<br><br>";
        } 
$conn->close();
?> 