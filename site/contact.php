<!doctype html>
<html>
<head>
<?php include_once("import.php");?>
<?php include_once("style.php");?>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	 <?php include_once 'header.php'; ?>
	 <div class="">
		 <img class="img-fluid background-img" src="../images/contact.jpg" alt="contact">
	 </div>
	 <div class="contact_bg">
		 <h1 class="text-center mx-auto pad-div4 font-style">We'd love to hear from you</h1>
		 <div class="form_line"></div>
		 <p class="text-margin1 text-font pad-div3">Have questions about how nature can help you streamline operations, improve performance and easily monitor the success of each department? Wondering
          how the integrated dealer management system works, and how it can work for you?</p>
		 <p class="text-margin1 text-font">Give us a call at 1-234-567-890 or send us a message using the form below and we’ll connect you with a dealer management software expert who can answer your questions.</p> 
		 
		 <!--Section: Contact v.2-->
		<section class="ml-3 mb-4">

			<!--Section heading-->
<!--			<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>-->
			<!--Section description-->
<!--
			<p class="text-center text-margin1 text-font mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
				a matter of hours to help you.</p>
-->
         <div class="container">
			 
			<div class="row">

				<!--Grid column-->
				<div class="col-md-12 contact-margin mb-md-0 mb-5">
					<form id="contact-form" name="contact-form" action="" method="POST">

						<!--Grid row-->
						<div class="row">

							<!--Grid column-->
							<div class="col-md-4">
								<div class="md-form mb-5">
									<input type="text" id="name" placeholder="your name" name="name" class="form-control">
									
								</div>
							</div>
							<!--Grid column-->

							<!--Grid column-->
							<div class="col-md-4">
								<div class="md-form mb-5">
									<input type="text" id="email" placeholder="your email address" name="email" class="form-control">
									
								</div>
							</div>
							<!--Grid column-->

						</div>
						<!--Grid row-->

						<!--Grid row-->
						<div class="row">
							<div class="col-md-4">
								<div class="md-form mb-5">
									<input type="text" id="subject" placeholder="subject" name="subject" class="form-control">
									
								</div>
							</div>
						</div>
						<!--Grid row-->

						<!--Grid row-->
						<div class="row">

							<!--Grid column-->
							<div class="col-md-4">

								<div class="md-form">
									<textarea type="text" id="message" placeholder="message" name="message" rows="2" class="form-control md-textarea"></textarea>
									
								</div>

							</div>
						</div>
						<!--Grid row-->

					</form>

					<div class="text-center text-md-left m-5">
						<a class="btn btn-success" onclick="">Send</a>
					</div>
					<div class="status"></div>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				\
				<!--Grid column-->

			</div>
        </div>
		</section>
		<!--Section: Contact v.2-->
	 </div>	
	 <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7600.899743454038!2d83.30439284410471!3d17.723429698253174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39438464a1ab69%3A0x1129c1737b206c48!2sNature&#39;s%20Wealth!5e0!3m2!1sen!2sin!4v1604668878546!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
</div>
	 <?php include_once("footer.php");?>
</body>
</html>