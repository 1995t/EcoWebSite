<?php
  include_once 'db.php';
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $email =  $_POST['email'];
  $dob =  $_POST['dob'];
  $password =  $_POST['password'];
  $confirm_password =  $_POST['confirm_password'];
  $data = mysqli_query($conn,"Insert into new_users (firstname,lastname,email,date_of_birth,password,confirm_password) Values ('$firstname','$lastname','$email','$dob','$password','$confirm_password')");
  if($data)
   {
     echo"Data inserted.";
     }
  else
   {
    echo "Error in inserting data";
     }
?>