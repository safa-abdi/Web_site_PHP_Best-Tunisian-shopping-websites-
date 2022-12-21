<?php include '../includes/header.php' ?>
<div class="navbar">
  <a href="../index.php">Home</a>
  <a href="../view/contact.php">Contact</a>
  <form class="form-inline my-2 my-lg-0" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" >
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="submit" >Search</button>
    </form>
</div>
<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
		<h1><br></h1>
		<h1 style="text-align:center;">Visties</h1>
       <hr>
	   <h1><br></h1>
	   <h1><br></h1>
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" method="post" action="../controller/contact_action.php">
					
						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
						</div>
						
						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>
							<div class="form-group">
							  <select class="form-control form-control-lg" name="a">
								<option value="0">choose subjet</option>
								<option value="DM">Request more info</option>
								<option value="RM">claim</option>
								</select>
							</div>
						
						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
						</div>

						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-primary btn-lg btn-block" value="Submit" onclick="myFunction()">
						</div>	
					
					</form>
					<input type="hidden" name="nbClick" value="0" /><input type="hidden" name="nbClickaff" value="0" size="1" /><input type="hidden" name="nbPage" value="1"><input type="hidden" name="annon" value="2"><input type="hidden" name="lastclick" /><input type="hidden" name="init" value="0" />

					<script>
						function myFunction() {
						  alert("Thank you. The Mailman is on His Way :)");
						}
						</script>
				</div>

				<!-- ./End Contact Form -->

				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<img  src="../photos/c3.jpg" width="500" height="300">
					<ul class="contact-short-info" >
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: safaabdi930@gmail.com</span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: +880-31-000-000</span>
						</li>	
					</ul>
				</div>
				<!-- / End Contact Details -->
					
				
			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>
	
<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.html">CONTACT</a>
					</li>
					<li>
						<a href="contact.html">PRIVACY POLICY</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="">Abdi Safa</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    <script type="text/javascript"> 
		var x=0  
		function compteur() 
		  { 
			 x = x+1; 
			 document.getElementById('nb').innerHTML = x; 
		  } 
 </script> 
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>