<!DOCTYPE html>
<html>
     <head>
	      <meta charset="utf-8">
		   <meta name="viewport" content="width=device-width, initial-scale=1">
		   <title>Eco-friendly Environment</title>
		   <script src="https://kit.fontawesome.com/c63e467e05.js" crossorigin="anonymous"></script>
		   <link rel="icon" href="images/sustainable-development.png" class="rounded-circle">
		   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		   
		   <link rel="stylesheet" href="css/style.css"> 
	       <script>
						 $('.message a').click(function(){
						 $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
                    });
           </script>
           <style>
		         @import url(https://fonts.googleapis.com/css?family=Roboto:300);
                        .head{
						  font-family: Verdana;
						  text-align: center;
						}
						.head_style{
						 color:ivory;
						}
						.login-head{
						 text-align: center;
						 font-family: Verdana;
						 color:ivory;
						}
						.login-page {
						  width: 360px;
						  padding: 2% 0 0;
						  margin: auto;
						}
						.form {
						  position: relative;
						  z-index: 1;
						  background: #FFFFFF;
						  max-width: 360px;
						  margin: 0 auto 100px;
						  padding: 45px;
						  text-align: center;
						  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
						}
						.form input {
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
						input[type=button], input[type=submit], input[type=reset] {
						  font-family: "Roboto", sans-serif;
						  text-transform: uppercase;
						  outline: 0;
						  background: #96bb7c;
						  width: 100%;
						  border: 0;
						  padding: 15px;
						  color: #FFFFFF;
						  font-size: 14px;
						  -webkit-transition: all 0.3 ease;
						  transition: all 0.3 ease;
						  cursor: pointer;
						}
						.button_1:hover, .button_1:active,.button_1:focus {
						  background: #43A047;
						}
						.form .message {
						  margin: 15px 0 0;
						  color: #b3b3b3;
						  font-size: 12px;
						}
						.form .message a {
						  color: #4CAF50;
						  text-decoration: none;
						}
						.form .register-form {
						  display: none;
						}
						.container {
						  position: relative;
						  z-index: 1;
						  max-width: 300px;
						  margin: 0 auto;
						}
						.container:before, .container:after {
						  content: "";
						  display: block;
						  clear: both;
						}
						.container .info {
						  margin: 50px auto;
						  text-align: center;
						}
						.container .info h1 {
						  margin: 0 0 15px;
						  padding: 0;
						  font-size: 36px;
						  font-weight: 300;
						  color: #1a1a1a;
						}
						.container .info span {
						  color: #4d4d4d;
						  font-size: 12px;
						}
						.container .info span a {
						  color: #000000;
						  text-decoration: none;
						}
						.container .info span .fa {
						  color: #EF3B3A;
						}
						body {
						  background: #96bb7c; /* fallback for old browsers */
						  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
						  background: -moz-linear-gradient(right, #96bb7c, #96bb7c);
						  background: -o-linear-gradient(right, #76b852, #8DC26F);
						  background: linear-gradient(to left, #76b852, #8DC26F);
						  font-family: "Roboto", sans-serif;
						  -webkit-font-smoothing: antialiased;
						  -moz-osx-font-smoothing: grayscale;      
						}
           </style>		   
     </head>	 
     <body>
	        <h1 class="head head_style">Welcome</h1> 
			 
	       <div class="login-page">
		              <h2 class="login-head">Login</h2>
					  <div class="form">
						<form class="login-form" action="data.php" method="post">
						  <input type="text" placeholder="username" name="user_name"/>
						  <input type="password" placeholder="password" name="pass_word"/>
						  <input class="button_1" type="submit" value="Submit" name="submit">
						  <p class="message"><a href="">Forgot password</a> <br><br><a href="#">Sign Up</a></p>
						</form>
					  </div>
					</div>
	                
	</body> 
</html>
