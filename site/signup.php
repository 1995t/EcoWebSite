<!doctype html>
<html>
<head>
 <?php include_once('import.php');?>
 <script type="text/javascript">
	 function validate()
	  {
		  var fname = document.getElementById('firstname').value;
		  var lname = document.getElementById('lastname').value;
		  var email = document.getElementById('email').value;
		  var dob = document.getElementById('dob').value;
		  var password = document.getElementById('password').value;
		  if((fname == "") || (fname == null))
			  {
				 document.getElementById('fname').innerHTML = "Please enter your firstname";
				 document.getElementById('firstname').style.border = "0.5px solid red"; 
				  return false;
			     }
		  else
			  {
				 document.getElementById('fname').innerHTML = "";
				 document.getElementById('firstname').style.border = "";  
			     }
		  if((lname == "") || (lname == null))
			  {
				 document.getElementById('lname').innerHTML = "Please enter your lastname";
				 document.getElementById('lastname').style.border = "0.5px solid red"; 
				  return false;
			     }
		  else
			  {
				 document.getElementById('lname').innerHTML = "";
				 document.getElementById('lastname').style.border = "";  
			     }
		  if((email == "") || (email == null))
			  {
				 document.getElementById('em').innerHTML = "Please enter your email";
				 document.getElementById('email').style.border = "0.5px solid red"; 
				  return false;
			     }
		  else
			  {
				 document.getElementById('em').innerHTML = "";
				 document.getElementById('email').style.border = "";  
			     }
		  if((dob == "") || (dob == null))
			  {
				 document.getElementById('db').innerHTML = "Please enter your date of birth";
				 document.getElementById('dob').style.border = "0.5px solid red"; 
				  return false;
			     }
		  else
			  {
				 document.getElementById('db').innerHTML = "";
				 document.getElementById('dob').style.border = "";  
			     }
		  if((password == "") || (password == null))
			  {
				 document.getElementById('pass').innerHTML = "Please enter your password";
				 document.getElementById('password').style.border = "0.5px solid red"; 
				  return false;
			     }
		  else
			  {
				 document.getElementById('pass').innerHTML = "";
				 document.getElementById('password').style.border = "";  
			     }
	    }
       
 
 </script>	 
 <style>
	 .form .field-width
	 {
		 width: 300px;
	    }
	 .spacing
	    {
		 margin-top: 100px;
		 margin-left: 200px;
		  }
	 body{
		 background-color: #f3f7fa;
		   }
     
		 .error
		  {
			color:#C81518;
	        font-size: 15px;
            font-weight: 20;
	        font-family: basic;				 
			} 	
	     
	 /*   
	 .form input[type=text] 
	     {
						  font-family: "Roboto", sans-serif;
						  outline: 1;
						  background: #f2f2f2;
						  width: 100%;
						  border: 0;
						  margin: 0 0 15px;
						  padding: 15px;
						  box-sizing: border-box;
						  font-size: 14px;
						}
						.form-signin input[type=submit] {
						  font-family: "Roboto", sans-serif;
						  text-transform: uppercase;
						  outline: 0;
						  background: #4CAF50;
						  width: 100%;
						  border: 0;
						  padding: 15px;
						  color: #FFFFFF;
						  font-size: 14px;
						  -webkit-transition: all 0.3 ease;
						  transition: all 0.3 ease;
						  cursor: pointer;
						}
*/
						.form-signin input[type=submit]:hover,.form input[type=submit]:active,.form input[type=submit]:focus {
						  background: #43A047;
						}
 </style>	 
</head>
<body>
	 <img class="image-fluid mt-2 ml-5" src="../images/nature.png">
	 <div class="container spacing">
		  <div class="row">
			  <div class="col-sm-4">
				    <div class="text-center">
					  <form class="form-signin" action="" method="post">
						  <h1 class="h3 mb-3 font-weight-normal text-success">Please Sign Up</h1>
						  <input class="form-control" type="text" placeholder="firstname" name="firstname" id="firstname">
						  <p id="fname" class="error"></p>
						  <input class="form-control mt-2" type="text" placeholder="lastname" name="lastname" id="lastname"><p id="lname" class="error"></p>
						  <input class="form-control mt-2" type="text" placeholder="your email address" name="email" id="email"><p id="em" class="error"></p>
						  <input class="form-control mt-2" type="date" placeholder="your date of birth" name="dob" id="dob"><p id="db" class="error"></p>
						  <input class="form-control mt-2" type="password" placeholder="password" name="password" id="password"><p id="pass" class="error mb-5"></p>
						  <input class="btn btn-lg btn-success btn-block" type="submit" value="Sign up" name="signup" onClick="return validate()">
                          <p class="mt-3">Already registered?<a class="ml-3" href="index.php">Sign In</a></p>
						  
						  <p>&copy; 2020 - 2021</p>	  
					  </form>
				  </div>	
			  </div>
			  <div class="col-sm-1">
				  
			  </div>	  
			  <div class="col-sm-4">
				   <div>
					   <img class="img-fluid" src="../images/signup.png" alt="home page logo">
				   </div>	   
			  </div>
		 </div>	  
	 </div>
<!--
	 <div class="container">
		 <div class="row">
			  <div class="col-sm-4">
				   
			  </div>
		 </div>
	 </div>	 
-->
	
</body>
</html>
<?php
  include_once("user/db.php");
  if(isset($_POST['signup']))
   {
	$firstname = $_POST['firstname'];
	$lastname =  $_POST['lastname'];
	$email = $_POST['email']; 
	$dob = $_POST['dob'];
	$password = md5($_POST['password']);
	echo $password."<br><br>";
	$query = "INSERT INTO new_users (firstname, lastname, email, date_of_birth, password) VALUES ('$firstname','$lastname','$email','$dob','$password')";
	$result = $conn->query($query); 
	if($result == TRUE)
	  {
		  echo "1 row inserted";
	  }
	
    }
?>