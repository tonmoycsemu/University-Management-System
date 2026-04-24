<!-- Footer Section -->
		<div class=" footer-row">
			<div class="container">
				<div class="row">
					<div class="school-logo">
						<img src="assets/img/logo__white.svg">
						<h4>BETTER WAY TO LEARN & GROW</h4>
					</div>
					<div class="col-md-4 col-sm-6 footer-item">
						<h5>CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>8457 Maplewood Avenue, Suite 210, San Diego, California 92101, USA</p>
						<p><i class="fa fa-mobile"></i> +1 (619) 555-9034</p>
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
						<p><i class="fa fa-clock-o"></i> SUN - FRI 10:00 AM - 4:00 PM</p>
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
		<script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/owl.carousel.min.js"></script>
        <script src="assets/js/js.js"></script>
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