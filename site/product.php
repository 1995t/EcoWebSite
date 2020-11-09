<!DOCTYPE html>
<html lang="en">
     <head>
	       <?php include_once("import.php");?>
		   <?php include_once("style.php");?>
		   <link rel="stylesheet" href="css/style.css">
	 </head>
	 <body>
		 
        <?php include_once 'header.php'; ?>
	     
		<img class="img-fluid background-img" src="../images/eco-friendly.jpeg" alt="background"> 		
        <div class="container-fluid">
		    
            <h1 class="img-text">
                <span>Our Products</span>
            </h1>
			
        </div>
        <div class="text-center font-style1 size2 my-5">Nature is helping millions of people go green</div>	
        <div class="text-center font-style1 size2">Why Nature?</div>
		 <div class="text-center font-style1 size2">We have many reasons!</div>
        <div class="container">
		     <div class="row">
			     <div data-aos="flip-up" data-aos-duration = "1500" class="col-sm-12 text-center my-2">
				      <img src="images/plant based.jpg" alt="plant based">
					  <div class="img-text3 size2 animate__animated animate__fadeInRight" style="font-family:'Playfair Display', serif;color: ivory;">100% Natural and Plant Based</div>
					  <div class="img-text4 size3 animate__animated animate__fadeInRight" style="font-family:'Playfair Display', serif;color: ivory;">Made from bamboo and corn starch,<br>making them 100% sustainable</div>
                 </div>
				 			 
			 </div>
        </div>
        <div class="container">
		     <div class="row">
			     <div data-aos="flip-up" data-aos-duration = "1500" class="col-sm-12 text-center my-2">
				      <img src="images/Plastic-free.jpg" alt="Plastic-free">
					  <div class="img-text5 size2 animate__animated animate__fadeInLeft" style="font-family:'Playfair Display', serif;color: ivory;">Plastic-Free</div>
					  <div class="img-text6 size3 animate__animated animate__fadeInLeft" style="font-family:'Playfair Display', serif;color: ivory;">Made from ingredients which are<br> biodegradable and compostable.</div>
                 </div>
				 			 
			 </div>
        </div>
        <div class="container">
		     <div class="row">
			     <div data-aos="flip-up" data-aos-duration = "1500" class="col-sm-12 text-center my-2">
				      <img src="images/Affordable.jpg" alt="Affordable">
					  <div class="img-text3 size2 animate__animated animate__fadeInRight" style="font-family:'Playfair Display', serif; color:ivory;">Eco-friendly Packing</div>
					  <div class="img-text4 size3 animate__animated animate__fadeInRight" style="font-family:'Playfair Display', serif; color:ivory;">Recycled paper<br>packing that is easy<br>on the environment</div>
                 </div>
				 			 
			 </div>
        </div>
		<div class="container">
		     <div class="row">
			     <div data-aos="flip-up" data-aos-duration = "1500" class="col-sm-12 text-center my-2">
				      <img src="images/Packaging.jpg" alt="Packing">
					  <div class="img-text5 size2 animate__animated animate__fadeInLeft" style="font-family:'Playfair Display', serif; color:ivory;">Eco-friendly Packing</div>
					  <div class="img-text6 size3 animate__animated animate__fadeInLeft" style="font-family:'Playfair Display', serif; color:ivory;">Recycled paper packing that is easy<br>on the environment</div>
                 </div>
				 			 
			 </div>
        </div>
        <div class="text-center my-4 size2 font-style">Explore Our Products</div>
        <div class="container-lg my-3">
			 <div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Carousel indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
					</ol>
				 
					<!-- Wrapper for carousel items -->

				 <div class="carousel-inner mx-auto">
						<div class="carousel-item active my-5">
							<div class="card" style="width: 15rem;margin: auto;">
								<?php
								  include_once("admin/admindb.php");
								  $query = "select * from upload_image";
								  $result = $connect->query($query);
								  while($row = $result->fetch_assoc())
								  {
									   if($row['image_name'] == "bamboo_charcoal.png")
									   {
										   
									   
								?>	
					            <img src='<?php echo $row['image_location']; } }
								       ?>' class="card-img-top img-height" alt="Reduce Reuse Recycle">
								<div class="card-body">
								
								<h5 class="card-title font-style1">Bamboo Charcoal</h5>
								<p class="card-subtitle">Price:<span class="text-danger ml-3"><del class="mr-3">Rs.999</del></span></p><p>Rs.899</p>
								<a href="#" class="btn btn-primary">Add to cart</a>
					           </div>
					        </div>
						</div>
						<div class="carousel-item my-5">
							
							<div class="card" style="width: 15rem;margin: auto;">
					            <img src="../images/Vegetable Fruit Bag.png" class="card-img-top img-height" alt="Vegetable fruit bag">
								<div class="card-body">
								<h5 class="card-title font-style1">Vegetable Fruit Bag</h5>
								<p class="card-subtitle">Price:<span class="text-danger ml-3"><del class="mr-3">Rs.199</del></span></p><p>Rs.149</p>
								<a href="#" class="btn btn-primary">Add to cart</a>
					           </div>
					        </div>
						</div>
						<div class="carousel-item my-5">
							<div class="card" style="width: 15rem;margin: auto;">
								
					            <img src="../images/yoga mat.png" class="card-img-top img-height" alt="Bamboo tooth brush">
								<div class="card-body">
								<h5 class="card-title font-style1">Yoga Mat</h5>
								<p class="card-subtitle">Price:<span class="text-danger ml-3"><del class="mr-3">Rs.199</del></span></p><p>Rs.149</p>
								<a href="#" class="btn btn-primary">Add to cart</a>
					           </div>
					        </div>
						</div>
						<div class="carousel-item my-5">
							<div class="card" style="width: 15rem;margin: auto;">
								
					            <img src="../images/handcrafted pouch.png" class="card-img-top img-height" alt="Bamboo tooth brush">
								<div class="card-body">
								<h5 class="card-title font-style1">Face Mask</h5>
								<p class="card-subtitle">Price:<span class="text-danger ml-3"><del class="mr-3">Rs.99</del></span></p><p>Rs.89</p>
								<a href="#" class="btn btn-primary">Add to cart</a>
					           </div>
					        </div>
						</div>							
							<div class="carousel-item my-5">
							<div class="card" style="width: 15rem;margin: auto;">
								
					            <img src="../images/face mask.png" class="card-img-top img-height" alt="Bamboo tooth brush">
								<div class="card-body">
								<h5 class="card-title font-style1">Handcrafted Pouch</h5>
								<p class="card-subtitle">Price:<span class="text-danger ml-3"><del class="mr-3">Rs.199</del></span></p><p>Rs.149</p>
								<a href="#" class="btn btn-primary">Add to cart</a>
					           </div>
					        </div>
						</div>

					</div>
					<!-- Carousel controls -->
					<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>		
			<?php include_once 'footer.php'; ?>
		    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
			  <script>
				AOS.init();
			  </script>
	 </body>
</html>

<?php ?>						
						
					
						
						
						
						
				