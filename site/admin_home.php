<!doctype html>
<html>
<head>
<?php include_once("import.php");?>
<style>
	  .admin-background
	   {
		 background-image: url("../images/home.jpg");
		 background-size: cover;  
		 height: 768px;
		 width: 100%;
		 opacity: 1;  
	     }
	.form-margin{
		margin-top: 20%;
		 }	
</style>	
</head>
<body>
     <div class="container admin-background form-margin">
		 <div class="row">
			  <div class="col-sm-12 text-center">
				   <!--		  <img src="../images/home.jpg">-->
				  <h1 class="m-5">Upload your data</h1>
		        <div class="form-group">
			       <form  action="" method="post" enctype="multipart/form-data">
						   <input class="text-center" type="file" name="file_name" id="file_name"><br><br>
						   <input class="text-center" type="submit" value="Upload" name="submit">
					       
			       </form>
		        </div>	 
			  </div>
	     </div>		 
 
	 </div> 
	
	 <form>
  
  
  
  
</form>
</body>
</html>
<?php
  include_once("admin/admindb.php");
  if(isset($_POST['submit']))
	  {
        $filename = $_FILES['file_name']['name'];
	    $filetype = $_FILES['file_name']['type'];
	    $filetmp = $_FILES['file_name']['tmp_name'];
	    $filesize = $_FILES['file_name']['size'];
	    $filepath = "../images/";
	    $filepath = $filepath.basename($_FILES['file_name']['name']);
	    if(move_uploaded_file($_FILES['file_name']['tmp_name'],$filepath))
		{
			echo "<p class='text-center'>Image successfully uploaded.</p><br><br>";
		}
	    else
		{ 	
		    echo "<p class='text-center'>Error in uploading image.</p><br><br>";
		}
//	    echo $filename."<br><br>";
//	    echo $filetype."<br><br>";
//	    echo $filetmp."<br><br>";
//	    echo $filesize."<br><br>";
	    $query = "insert into upload_image (image_name,image_location) values ('$filename','$filepath')";
	    $result = $connect->query($query);
	    if($result)
		{
			echo "Image uploaded into database.<br><br>";
		}
	    else
		  {	
		    echo "Error in uploading image into database.<br><br>";
		     }
         }
?>