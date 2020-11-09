<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nature</title>
<?php include_once('import.php');?>
<script>
					function validate()
			          {
						 
						 var email = document.getElementById("email").value;
						 var pass = document.getElementById("password").value; 
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
     <img class="image-fluid mt-2 ml-5" src="../images/nature.png">
	 <div class="container spacing">
		  <div class="row">
			  <div class="col-sm-4">
				    <div class="text-center">
					  <form class="form-signin" action="" method="post">
						  <h1 class="h3 mb-3 font-weight-normal text-success">Create new admin</h1>
						  <input class="form-control mt-2" type="email" placeholder="your email address" name="email" id="email"><p id="em" class="error"></p>
						  <input class="form-control mt-2" type="password" placeholder="password" name="password" id="password"><p id="pass" class="error mb-5"></p>
						  <input class="btn btn-lg btn-success btn-block" type="submit" value="ADD" name="signup" onClick="return validate()">
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
</body>
</html>
<?php
    include_once("admin/admindb.php"); 
   if(isset($_POST['signup']))
	{
		$email = $_POST['email'];
	    $password = md5($_POST['password']);
	    $check = "select * from admin";
	    $flag = false;
	    $check_admin = $connect->query($check);
	     while($row = $check_admin->fetch_assoc())
		{
			//echo $row['email']."<br>";
			 if(($email == $row['email']))
			  {
				echo $row['email']." admin with the email already exists.<br><br>";
				$flag = true;
				break; 
			     }
			 else
			  {	  
			    //echo " can continue creating admin<br><br>";
				$flag = false;
				//continue; 
			     }
		}
	    if(!$flag)
		{ 
			$query = "insert into admin (email,password) values ('$email','$password')";
            $result = $connect->query($query);   
		   }
//	    if($result)
//		  {
//			 echo "New admin created successfully.<br><br>";
//		     }
//	    else
//		  {	
//		     echo "Error in creating new admin".mysqli_error();
//		     }
   }
?>