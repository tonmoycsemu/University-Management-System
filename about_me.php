<?php include('login_header.php'); ?>
		
		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-user-secret"></i>About Me</h2>
			</div>
		</div>
		
		<!-- Events Section -->
		<div class="row section-row evets-row">
			<div class="container">
				<div class="col-md-8">
					<div class="event-items"style="margin:0 0 40px 0;">
						<div class="right-side-notice">
								<h2 class="my-h-list-before"><strong>About Me:</strong></h2>
								<div class="text-center">
					<?php
					if (isset($_SESSION["id"])) {
					  $id=$_SESSION["id"];
					  
					  $qry="SELECT * FROM student WHERE studentID= $id ";
					  $res=mysqli_query($con,$qry);
					  $row=mysqli_fetch_array($res);
		                
		                  
		            ?>

					           	<div class="faculty-img">
									<img src="admin/<?= $row['picture'] ?>" alt="event" />
								</div>
									<h2 style="color: #000;"><strong><?php echo $row['name'];?></strong></h2>
					 <?php 

					$q="SELECT * FROM dept where id= ".$row['dept']." ORDER BY id ASC";
				    $result=mysqli_query($con,$q);
				    $rowc=mysqli_fetch_array($result);
				 ?>

								<p style="color: #000;margin: 0;"><strong>Department: </strong><?php echo $rowc['dept'];?></p>
								<p style="color: #000;margin: 0;"><strong>Student ID: </strong><?php echo $row['studentID'];?></p>
								<p style="color: #000;margin: 0;"><strong>Phone Number: </strong><?php echo $row['phone'];?></p>
								<p style="color: #000;margin: 0;"><strong>E-mail: </strong><?php echo $row['email'];?></p>
								<p style="color: #000;margin: 0;"><strong>Address: </strong><?php echo $row['address'];?></p><br>



		            <?php
		               } 
		            ?>
								</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="col-md-4">
					<?php include('login_sidebar.php'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
<?php include('login_footer.php'); ?>