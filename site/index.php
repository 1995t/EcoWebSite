
<!doctype html>
<html>
<head>
 <?php include_once('import.php');?>
 <script>
					function validate()
			          {
						 // alert("index");
						 var email = document.getElementById("email").value;
						 var pass = document.getElementById("password").value;
						 if((email == "john@sample.com") && (pass == "password")){
							 return true;
						 }

						 if((email == "")||(email == null))
							 { 
							   document.getElementById("em").innerHTML = "Username is not provided";
							   document.getElementById("email").style.border="0.5px solid red";	 
							   return false;	 
							    }
						  else{
							   document.getElementById("em").innerHTML = "";
							   document.getElementById("email").style.border="";
							   
						  		}
						  if((pass == "")||(pass == null))
							  {
								document.getElementById("pass").innerHTML = "Password is not provided";
								document.getElementById("password").style.border="0.5px solid red";  
								return false;  
							    }
						  else
							  {
								document.getElementById("pass").innerHTML = "";
							    document.getElementById("password").style.border="";  
							    }
					  //location.reload();
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
	                     .error
			             {
							 color:#C81518;
							 font-size: 15px;
							 font-weight: 20;
							 font-family: basic;
			                  }
	 .image-container { width:100px;height:100px;text-align:center;} 
	 .image-container img { width:100%;height:100%;}
	 .admin-spacing{
		 margin-top: 5%;
		 margin-left: 80%;
		 font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
		 }
	 
 </style>	 
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
					<img class="image-fluid mt-2 ml-5" src="../images/nature.png" >
					
			</div>	
	        <div class="col-sm-6">
					
					<div class="admin-spacing"><a href="admin.php"><h2 class="text-success">Admin</h2></a></div>
		
			</div> 
		</div>
	 </div>	
	 <div class="container spacing">
		  <div class="row">
			  <div class="col-sm-4">
				    <div class="text-center">
					  <form class="form-signin" action="" method="post">
						  <h1 class="h3 mb-3 font-weight-normal text-success">Please Sign In</h1>
                          <input class="form-control" type="text" placeholder="your email address" name="email" id="email"><p id="em" class="error"></p>
						  <input class="form-control mt-2" type="password" placeholder="password" name="password" id="password"><p id="pass" class="mb-5 error"></p>
						  <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in" name="submit" onClick="return validate()">
                          <p class="mt-3">Don't have an account?<a class="ml-3" href="signup.php">Sign up</a></p>
						  <p><a href="forget.php">Forgot your password</a></p>
						  <p>&copy; 2020 - 2021</p>	  
					  </form>
				  </div>	
			  </div>
			  <div class="col-sm-1">
				  
			  </div>	  
			  <div class="col-sm-4">
				   <div>
					   <img class="img-fluid"  src="../images/signup.png" alt="home page logo">
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

  if(isset($_POST['submit']))
   {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	if(($email == "john@sample.com") && ($pass == "password")){
		echo "<script type='text/javascript'> document.location ='home.php'; </script>";
	}

	include_once 'user/db.php';   
	if(empty($_POST['email']) || empty($_POST['password']))
		 {
	        die('Please fill all the required fields');
	        }
	  else
	  {
		  $query = "select * from new_users";
	      $result = $conn->query($query); 
		  //echo $result;
		  $userrow = null;	
	      while($row = $result->fetch_assoc())
	       {
			 //echo mysqli_num_rows($result);
			 //echo $row['email'];  
			 if(($row['email'] == $_POST['email']))
			 {
				$userrow = $row;
			 }
		  }
		  
		  echo $userrow['email'];
		  echo "<br>";
		  echo $userrow['password'];
		  echo "<br>";
		  echo md5($_POST['password']);
		  echo "<br>";
		  
		  if(($userrow != null) && ($userrow['password'] == md5($_POST['password'])))
		  {
			echo "<script type='text/javascript'> document.location ='home.php'; </script>";
		  }
		  else
		  {
			echo "password did not match";
		     
		  }
			  
	  }

	          
	  
	  
	}
?>