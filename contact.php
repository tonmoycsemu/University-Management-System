<?php include('header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fas fa-envelope"></i>GET IN TOUCH</h2>
			</div>
		</div>
		<?php $message=''; ?>
		<?php 
			if (isset($_POST['msg_submit'])) {
			 if ($_POST['rand_number']==$_POST['rand_up_number']) {
				$name  = $_POST['name']; 
				$email = $_POST['email']; 
				$phone = $_POST['phone']; 
				$message = $_POST['message']; 
				if($name != '' & $email != '' & $phone != '' & $message != ''){
				$query="INSERT INTO contact (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";

		        $q=mysqli_query($con,$query);
		        if ($q) {
		        	?>
		        	<script>
		          		alert("Your Message Register Succesfully");
		          	</script>
		          	<?php
		        }
		    }
		        else{
		          ?>
		        	<script>
		          		alert("Your Message Register Unsuccesfully. Plese fill your form field.");
		          	</script>
		          <?php
		        }

			}
			else{
                $message = "You are a robot. Get a human to fill this form.<br><br>";
              }
		 }
	?>
		<!-- contact row -->
		<div class="contact-info p-100 section-row evets-row contact-row">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
							<?php include('sidebar.php'); ?>
					</div>
					
					
					<div class="col-md-8 contact-form"  style="margin:0 0 40px 0;">
							<div class="col-xs-12">
								<h3><i class="fa fa-edit"></i>WRITE TO US.</h3>
							</div>
						<form method="post" action="" enctype="multipart/form-data">
							<div class="col-xs-12">
								<label>YOUR NAME</label>
								<input type="text" placeholder="Your Name" class="form-control" name="name">
							</div>
							<div class="col-xs-12">
								<label>EMAIL</label>
								<input type="email" placeholder="Email" class="form-control" name="email">
							</div>
							<div class="col-xs-12">
								<label>PHONE NUMBER</label>
								<input type="text" placeholder="Phone Number" class="form-control" name="phone">
							</div>
							<div class="col-xs-12">
								<label>YOUR MESSAGE</label>
								<textarea rows="3" placeholder="Write here" class="form-control" name="message"></textarea>
							</div>
							<div class="col-xs-12">
								<?php 
				                  $number1 = rand(1,9);
				                  $number2 = rand(1,9);
				                ?>
				                <label for="exampleInputEmail1">What is the answer of <?php echo"$number1 + $number2"?></label>
				                <input type="text" class="form-control" name="rand_up_number">
				                <input type="hidden"  name="rand_number" value="<?=$number1 + $number2 ?>">
							</div>
							<div class="col-xs-12">
								<input type="submit" class="submit-contact-form" name="msg_submit" value="Submit" />
							</div>
							<div class="col-xs-12">
								<h4><?= $message; ?></h4>
							</div>
						</form>
	
						<div class="clearfix"></div>
						<div style="margin: 30px 0 0 0">
							<?php include('contact-section.php'); ?>
						</div>
						
					</div>
					
					
				</div>
			</div>
		</div>
		
		<!-- Know More Info & Admission apply row -->
		<div class="map-section">
			<div class="googlemap">
				<div id="map"></div>
			</div>
		</div>
		
		<!-- Know More Info & Admission apply row -->
		<div class="row apply-know-row">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 admission-row">
						<h3>Albert Einstein</h3>
						<p>" Any intelligent fool can make things bigger, more complex, and more violent. It takes a touch of genius -- and a lot of courage -- to move in the opposite direction. "</p>

					</div>
					<div class="col-sm-6 info-row">
						<h3> Dr. APJ Abdul Kalam</h3>
						<p>" It doesn’t matter who I am, I will work, work and work,<br>All the forces of the universe will also assist me, I will achieve what I dream,<br>Even reaching any part of our Galaxy. "</p>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer Section -->
		<div class="row footer-row">
			<div class="container">
				<div class="school-logo">
					<img src="assets/img/logo__white.svg">
					<h4>BETTER WAY TO LEARN & GROW</h4>
				</div>
				<div class="col-md-4 col-sm-6 footer-item">
					<h5>CONTACT US</h5>
					<p><i class="fa fa-map-marker"></i>8457 Maplewood Avenue, Suite 210, San Diego, California 92101, USA</p>
					<p><i class="fa fa-mobile"></i>+1 (619) 555-9034</p>
					<p><i class="fa fa-envelope"></i>support@unipixedu.us</p>
				</div>
				<div class="col-md-2 col-sm-6 footer-item">
					<h5>QUICK LINKS</h5>
					<div class="quick-link-box">
						<a href="academic.php"><i class="fa fa-graduation-cap"></i>Academics</a>
						<a href="admission.php"><i class="fa fa-users"></i>Admission</a>
						<a href="notice.php"><i class="fa fa-calendar"></i>Notice</a>
						<a href="campus-life.php"><i class="fa fa-thumbs-up"></i>Campus Life</a>
					</div>
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-md-3 col-sm-6 footer-item">
					<h5>UNIVERSITY TIMINGS</h5>
					<p><i class="fa fa-clock-o"></i> MON - FRI 9:00 AM - 3:00 PM</p>
					<p><i class="fa fa-clock-o"></i> SAT 9:00 AM - 1:00 PM</p>
				</div>
				<div class="col-md-3 col-sm-6 footer-item">
					<h5>SUBSCRIBE</h5>
					<form method="post" action="" enctype="multipart/form-data">
						<div class="footer-subscribe">
							<i class="fa fa-envelope"></i><input type="email" name="email" placeholder="Enter E-mail" />
						</div>
						
						<input type="submit" class="subscribe-link my-btn" name="submit" value="Submit" />
					</form>
			</div>
			</div>
			<div class="footer-social-row">
				<a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
				<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
				<a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a>
				<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
		
		
		<!-- Login Modal -->
		<!-- Modal -->
		<div class="modal fade" id="loginModal" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content login-modal">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN</h4>
					</div>
					<div class="modal-body">
					<form method="post" action="" enctype="multipart/form-data">
					
						<div>
							<label><i class="fa fa-user"></i>Student Id</label>
							<input class="form-control" name="id" type="text" placeholder="Student Id">
						</div>
						<div>
							<label><i class="fa fa-key"></i>PASSWORD</label>
							<input class="form-control" name="password" type="password" placeholder="Password">
						</div>
						<a href="forget-password.php" class="forgot-link">FORGOT PASSWORD?</a>
						
						<input type="submit" class="login-link" name="login" value="Login"/>
					
					</form>
					</div>
				</div>
			</div>
		</div>

		
        <!-- Scripts -->
        <script src="assets/js/jQuery_v3_2_0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/owl.carousel.min.js"></script>
        <script src="assets/js/js.js"></script>
		<script src="http://maps.google.com/maps/api/js"></script>
		<script src="assets/js/gmaps.min.js"></script>
		<script type="text/javascript">
		var map;
		$(document).ready(function(){
		  var map = new GMaps({
			el: '#map',
			lat: 24.8998373,
			lng: 91.8259622,
			scrollWheel:false
		  });
		
		  GMaps.geolocate({
			success: function(position){
			  map.setCenter(position.coords.latitude, position.coords.longitude);
			},
			error: function(error){
			  alert('Geolocation failed: '+error.message);
			},
			not_supported: function(){
			  alert("Your browser does not support geolocation");
			},
			always: function(){
			  alert("Done!");
			}
		  });
		});
	</script>
	<script>
				/*scrollbar script*/
			$(window).bind('scroll', function () {
			    if ($(window).scrollTop() > 300) {
			        $('.scroll-nav').addClass('fixed');
			    } else {
			        $('.scroll-nav').removeClass('fixed');
			    }
			});
		</script>

	<?php 

			if (isset($_POST['submit'])) {
				$email = $_POST['email']; 
				if($email != ''){
				$query="INSERT INTO newsletter (email) VALUES ('$email')";

		        $q=mysqli_query($con,$query);
		        if ($q) {
		        	?>
		        	<script>
		          		alert("Your E-mail Register Succesfully");
		          	</script>
		          	<?php
		        }
		    }
		        else{
		          ?>
		        	<script>
		          		alert("Your E-mail Register Unsuccesfully");
		          	</script>
		          <?php
		        }

			}
		 ?>
    </body>

</html>