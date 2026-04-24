<?php include('header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-user-secret"></i>Librarian Details</h2>
			</div>
		</div>
		
		<!-- Events Section -->
		<div class="row section-row evets-row">
			<div class="container">
				<div class="col-md-8">
					<div class="event-items"style="margin:0 0 40px 0;">
						<div class="right-side-notice">
								<h2 class="my-h-list-before"><strong>Librarian Details:</strong></h2>
								<div class="text-center">
					<?php
					if (isset($_GET['id'])) {
					  $id=$_GET['id'];
					  
					  $qry="SELECT * FROM librarian WHERE id= $id ";
					  $res=mysqli_query($con,$qry);
					  $row=mysqli_fetch_array($res);
		                
		                  
		            ?>

					           	<div class="faculty-img">
									<img src="admin/<?= $row['picture'] ?>" alt="event" />
								</div>
									<h3 style="color: #000"><strong><?php echo $row['name'];?></strong></h3>
									<p style="color: #000"><strong><?php echo $row['designation'];?></strong></p>
						        <p style="color: #000;"><?php echo ' '.  nl2br(substr($row['details'],0,100000)).'';?></p>

						            <?php
						               } 
						            ?>
								</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="col-md-4">
					<?php include('sidebar.php'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
<?php include('footer.php'); ?>	