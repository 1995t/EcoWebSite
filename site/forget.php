<!doctype html>
<html>
<head>
 <?php include_once('import.php');?>
 <script type="text/javascript">
	     function validate()
	      {
			var email = document.getElementById('email').value;
			var pass = document.getElementById('password').value;
			var cpass = document.getElementById('cfpassword').value;
			if((email == "") || (email == null))
				{
					document.getElementById('error').innerHTML = "Please enter all the required fields";
					document.getElementById('email').style.border = "0.5px solid red";
					return false;
				   }
			  else
				 { 
				    document.getElementById('error').innerHTML = "";
					document.getElementById('email').style.border = "";
				   }
			  if((pass == "") || (pass == null))
				{
					document.getElementById('error').innerHTML = "Please enter all the required fields";
					document.getElementById('password').style.border = "0.5px solid red";
					return false;
				   }
			  else
				 { 
				    document.getElementById('error').innerHTML = "";
					document.getElementById('password').style.border = "";
				   }
			  if((cpass == "") || (cpass == null))
				{
					document.getElementById('error').innerHTML = "Please enter all the required fields";
					document.getElementById('cfpassword').style.border = "0.5px solid red";
					return false;
				   }
			  else
				 { 
				    document.getElementById('error').innerHTML = "";
					document.getElementById('cfpassword').style.border = "";
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
	 .form input[type=text],input[type=date],input[type=password] {
						  font-family: "Roboto", sans-serif;
						  outline: 0;
						  background: #f2f2f2;
						  width: 100%;
						  border: 0;
						  margin: 0 0 15px;
						  padding: 15px;
						  box-sizing: border-box;
						  font-size: 14px;
						}
*/
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
						  <h1 class="h3 mb-3 font-weight-normal text-success">Change Your Password</h1>
						  <p class="error" id="error"></p>
						  <input class="form-control" type="text" placeholder="your email address" name="email" id="email">
						  <input class="form-control mt-2" type="password" placeholder="password" name="password" id="password">
						  <input class="form-control mt-2 mb-5" type="password" placeholder="confirm password" name="cfpassword" id="cfpassword">
						  <input class="btn btn-lg btn-primary btn-block mb-4" type="submit" value="Change Password" name="change" onClick="return validate()">
                          
						  <p><a href="index.php">Sign In</a></p>
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
  include_once("user\db.php");
  if(isset($_POST['change']))
   {
	 $email = $_POST['email'];
	 $password = md5($_POST['password']); 
	 $confirmpass = md5($_POST['cfpassword']);
	// echo $firstname;
	// echo $password;
	 $query = "UPDATE new_users SET password = '$password' where email = '$email'";
	 if($password === $confirmpass)
	    {
            $result = $conn->query($query);
			if($result == TRUE)
			  {
				  echo "<br><br><b>Password updated.</b><br><br>";
			  }
		}
	 else{
		 echo "Passwords don not match";
	 }  
	
	   }
?>