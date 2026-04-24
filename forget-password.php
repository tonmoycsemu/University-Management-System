<?php include('header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-calendar"></i>FORGET PASSWORD</h2>
			</div>
		</div>
		
		<!-- Events Section -->
		<div class=" section-row evets-row">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="forget-password-content" style="margin:0 0 30px 0">
								<h2 class="my-h-list-before">Forget Password :</h2>
								<form action='' method='post'>
									<div class="form-inline my-4">
										<div class="row">
											<div class="col-sm-10">
												<input type="email" class="form-control" style="width:100%;" id="exampleInputPassword1" placeholder="Email" name="email" required="1">
											</div>
											<div class="col-sm-2">
												<input type="submit" name="submit" value="RESET" style="margin:0 0 0 15px;" class="btn my-btn ml-3 reset" >
											</div>
										</div>
									</div>
								</form> 
								<br><br>
								<p><h4>Plz Meet Your Institute Admin.</h4></p>		
						</div>
					</div>
					
					<div class="col-md-4">
						<?php include('sidebar.php'); ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
<?php include('footer.php'); ?>	