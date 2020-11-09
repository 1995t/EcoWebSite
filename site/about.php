<!doctype html>
<html>
<head>
<?php include_once("import.php");?>
<?php include_once("style.php");?>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	 <?php include_once 'header.php'; ?>
	 <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
     <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideWidth: 720,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.3;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
	 <div class="">
		 <img class="img-fluid background-img" src="../images/about.jpg" alt="contact">
	 </div>
	 <div class="container pad-div">
		  <div class="row">
			   <div class="col-sm-12">
				    <h1 class="text-center">The Nature is a global environmental nonprofit working to create a world where people and nature can thrive. </h1>
				    <p class="pad-div2 my-5 text-justify">Founded at its grassroots in the United States in 1951, The Nature has grown to become one of the most effective and wide-reaching environmental organizations in the world. Thanks to more than a million members and the dedicated efforts of our diverse staff and more than 400 scientists, we impact conservation in 79 countries and territories across six continents. </p>
			   </div>
		  </div>	  
	 </div>
	<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="../images/img1.jpg" />
            </div>
            <div>
                <img data-u="image" src="../images/img2.jpg" />
            </div>
            <div>
                <img data-u="image" src="../images/img3.jpg" />
            </div>
            <div>
                <img data-u="image" src="../images/img4.jpg" />
            </div>
           
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">animation</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:12px;height:12px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
     
	 <div class="container mt-5">
		  <div class="row">
			   <div class="col-sm-12">
				    <h1 class="text-center font-style" id="">Our Mission</h1>
				    <p class="text-center">We are focusing on these key areas in order to achieve our ambitious mission. </p>
			   </div>
			</div>	
		  <div class="row pad-div3">
			  <div class="col-sm-3 text-center">
				  <div data-aos="zoom-in-up" class="img-logo1">
					  <img class="img-fluid" src="../images/Climate.png" alt="climate">
					  <img class="img-fluid img-top" src="../images/Climate_hover.png" alt="climate">
				  </div>
				  <p>Tackle Climate Change</p>
			  </div>
			  <div class="col-sm-3 text-center">
				  <div data-aos="zoom-in-up" class="img-logo1">
				  <img class="img-fluid" src="../images/LandWater.png" alt="climate">
				  <img class="img-fluid img-top" src="../images/LandWater_hover.png" alt="climate">
				  </div>
				  <p>Protect Land & Water</p>
			  </div>
			  <div class="col-sm-3 text-center">
				  <div data-aos="zoom-in-up" class="img-logo1">
				  		<img class="img-fluid" src="../images/FoodWater.png" alt="climate">
				  		<img class="img-fluid img-top" src="../images/FoodWater_hover.png" alt="climate">
				  </div>
				  <p>Provide Food & Water Sustainably</p>
			  </div>
			  <div class="col-sm-3 text-center">
				  <div data-aos="zoom-in-up" class="img-logo1">
					  <img class="img-fluid" src="../images/Cities.png" alt="climate">
					  <img class="img-fluid img-top" src="../images/Cities_hover.png" alt="climate">
				  </div>
				  <p>Build Healthy Cities</p>
			  </div>
		  </div>	  
	 </div>	
	 <h1 class= "font-style team-margin my-5">Meet the Team</h1>
	 <div class="container">
		  <div class="row">
			  
			  <div data-aos="flip-left" data-aos-duration="1500" class="col-sm-3 text-center team-bg ml-5">
			      <img class="img-fluid  mt-4 team-img rounded-circle" src="../images/john-timperley.jpg"> 
				  <p class="mt-3">CEO & Founder</p>
				  <span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
				  <button class="btn btn-success m-3">Contact</button>
			  </div>
			  <div data-aos="flip-up" data-aos-duration="1500" class="col-sm-3 text-center team-bg ml-5">
				  <img class="img-fluid  mt-4 team-img rounded-circle" src="../images/professional1.jpg">
				  <p class="mt-3">Designer</p>
				  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
				  <button class="btn btn-success m-3">Contact</button>
			  </div> 
			  <div data-aos="flip-right" data-aos-duration="1500" class="col-sm-3 text-center team-bg ml-5">
				  <img class="img-fluid mt-4 team-img rounded-circle" src="../images/Jessica_Pfisterer.jpg">
				  <p class="mt-3">Team Lead</p>
				  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
				  <button class="btn btn-success m-3">Contact</button>
			  </div> 
		  </div>
	 </div>	 
	 <?php include_once("footer.php");?>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
			  <script>
				AOS.init();
			  </script>
</body>
</html>