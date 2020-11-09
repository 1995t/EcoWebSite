<?php
 include_once 'db.php';
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <style>
           body
           {
               max-width: 500px;
               margin: auto;
}
              }
           table.th.h1{
              text-align: center; 
           }
           </style> 
      </head>
      <body>
           <div style="text-align:center"> 
           <h1>Sign Up</h1>
           <form action="signup.php" method="post">
               <table>
                 
                     <tr><td><b>First Name</b></td><td><input type="text" placeholder="firstname" name="first_name"></td></tr><br><br>
                     <tr><td><b>Last Name</b></td><td><input type="text" placeholder="lastname" name="last_name"></td></tr><br><br> 
                     <tr><td><b>Email</b></td><td><input type="email" placeholder="firstname" name="email"></td></tr><br><br> 
                     <tr><td><b>Date of Birth</b></td><td><input type="text" placeholder="Date of Birth" name="dob"></td></tr><br><br>
                     <tr><td><b>Password</b></td><td><input type="password" placeholder="password" name="password"></td></tr><br><br> 
                     <tr><td><b>Confirm Password</b></td><td><input type="password" placeholder="password" name="confirm_password"></td></tr><br><br> 
                     <br><br>
                     <tr><td><input type="submit" value="Sign Up" name="submit"></td></tr> 
               </table>
           </form>
           </div>
      </body>
 </html>
 