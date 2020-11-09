<style>
	
	/*Backgroung image css styling*/
	
	.background
	  {
		background-image: url("../images/nature.jpg");
		background-repeat:no-repeat;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		position: absolute; 
		clip-path: inset(0 0 10% 0);
		-moz-background-size:100% auto;
		-webkit-background-size:100% auto;
		background-size:100% auto;		  
	  }	
	.background-contact {
/*
			background-image: url("../images/contact.jpg");
			background-repeat: no-repeat;
*/          height: 300px;   

         }
	.clip90
	  {
		clip-path: inset(100% 0 90% 0);
	  }
	.img-text
	{
	    color:#ffffff;
		font-size:60px;
		font-family:'Playfair Display', serif;    
		position:absolute;
		text-align: center;
		top:40%;
		left:20%;
		right:20%;
		opacity: 0.75;
	  }
	 .op-color
	{ 
	    opacity: 0.6; 
	  }
	
	/*Navbar links css styling*/
	
	a
	  {
		color: ivory;
		
	    }
	a:hover
	  {
		color: #206a5d;  
	    }
	.navbar-bg
	    {
	    background-color: #206a5d;
	       }
	.navbar-margin{
		margin-left: 300px;
		} 
	.navbar-elements-margin
	   {
		 margin-left: 20px;  
	      }
	  body
	   {
/*		  background-image: url('"../images/background.jpg"');*/
		  
	      }
	
	
	/*Button styling css*/
	
	
	.btn-text{
				position:absolute;
				text-align: center;
				top:90%;
				left:45%;

			}
	 .btn-button{
				color:black;
				background-color:ivory;
                  }
     .btn-button:hover{
				color:ivory;
				background-color:#206a5d;
			      }
	
	 /* Section padding css styling*/
	
	.pad-div{
		        padding-top: 4rem; 
		        padding-bottom: 2rem;
	}
	.pad-div2{
		      padding-left: 20%;
		      padding-right: 20%;
		
	}
	.pad-div3{
		      padding-top: 1%;
		      padding-bottom: 1%;
		
	}
	.pad-div4{
		     padding-top: 5%;
		     padding-bottom: 5%;
	}
	
	/*Heading css styling*/
	
	.h1{
		color: #000000;
		font-family: "Nunito Sans",sans-serif;
	}
	
	/* Paragraph css styling */
	
	p{
		font-family: "Nunito Sans",sans-serif;
	}
	
	/*Text css styling*/
	
	.text-margin{
		margin-left: 150px;
		margin-right: 150px;
	}
	.text-margin1{
		margin-left: 25%;
		margin-right: 25%;
		text-align: justify;
	}
	.text-font{
		font-size:1rem !important;
		
	}
	.font-style
      {
	font-family:'Playfair Display', serif;
         }
    .font-style1{
	font-family: 'Rowdies', cursive;
	}
	/*anchor tag css styling*/
	
	a{color:#96bb7c;}
	
	/* Footer css styling*/
	
	.footer-margin{
		margin-top: 50px;
	}
	.footer-para{color:#96bb7c;}
	
	/*Image css styling*/
	
	.img-logo1 {
		width: 70px;
		height: 70px;
        position: relative;
        display: inline-block;
        margin: 50px;
    }
    .img-logo1 .img-top {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99;
    }
    .img-logo1:hover .img-top {
        display: inline;
    }
	.img-logo1:hover img{
		width: 100px;
		height: 100px;
	}
	.img-height{
		height:150px;
		background-size: cover;
	}
	.img{
		border: 5px solid #078F8F;
	}
	
/*
	.img-logo1{
		list-style: none;
        text-align: center;
		width: 70px;
		height: 70px;
	}
	.img-logo1_hover{
		display: none;
	}
*/
	
	/* Home video css styling */
	.video{
		width: 100%;
	}
	
	/* Card css styling */
	
	.card_img_hover:hover
	{
		width: 19rem;
	}
	.card-border{
		border: 5px solid #5C5A5A;
	}
/*
	.card-title{
		height: 15px;
		
	}
*/
	.card-title-font{
		font-family: 'Noto Serif', serif;
		
	}
	.card-text-font{
		font-family: 'PT Sans Narrow', sans-serif;
	}
	.home-video { position:relative; }
    .home-video video {
		position:relative;
		z-index:0;
}
	.overlay{
		position: absolute;
		top: 40%;
		left: 33%;
		z-index: 1;
	}
	
	/* Contact form css styling */
	
	.form_line{
		margin-left: 30%;
		background-color: #3e978b;
		width: 550px;
		height: 2px;
		text-align: center;
	}
	.contact_bg{
		background-color: antiquewhite;
	}
	
	/* Carousel css styling */
	.carousel{
    background-color: #078F8F !important;
    margin-top: 20px;
}
.carousel-item{
    text-align: center;
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
	
	/* Team Image css styling*/
	
	.team-img{
		width:200px;
		height:200px;
	}
	.team-bg{
		background-color: #078F8F;
		border-radius: 20px;
	}
	.team-margin{
		margin-left: 37%;
	}
	
	/* Contact form css styling */
	
	.contact-margin{
		margin-left: 200px;
	}
</style>	