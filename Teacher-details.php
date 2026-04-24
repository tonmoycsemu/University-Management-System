<?php include('header.php'); ?>

		<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-user-secret"></i>Faculty Details</h2>
			</div>
		</div>

		<!-- Events Section -->
		<div class="row section-row evets-row">
			<div class="container">
				<div class="col-md-8">
					<div class="event-items"style="margin:0 0 40px 0;">
						<div class="right-side-notice">
								<h2 class="my-h-list-before"><strong>Faculty Details:</strong></h2>
								<div class="text-center">
					<?php
					if (isset($_GET['id'])) {
					  $id=(int)$_GET['id'];

					  $qry="SELECT * FROM faculty WHERE id=$id";
					  $res=mysqli_query($con,$qry);
					  $row=mysqli_fetch_array($res);

					  if($row){
		            ?>

					           	<div class="faculty-img">
									<img src="admin/<?= htmlspecialchars($row['picture']) ?>" alt="event" />
								</div>
									<h2 style="color: #000;"><strong><?php echo htmlspecialchars($row['name']);?></strong></h2>
									<p style="color: #000;margin: 0;"><strong><?php echo htmlspecialchars($row['designation']);?></strong></p>
					 <?php 

					$q="SELECT * FROM dept where id=".(int)$row['dept']." ORDER BY id ASC";
				    $result=mysqli_query($con,$q);
				    $rowc=mysqli_fetch_array($result);
				 ?>

								<p style="color: #000;margin: 0;"><strong><?php echo htmlspecialchars($rowc['dept'] ?? '');?></strong></p>
								<!--<h2 style="font-size: 18px;color: #000;"><strong>Biography</strong></h2>-->
						        <p style="color: #000;margin: 0 0 8px 0;"><?php echo $row['details'];?></p>
						        <!--<h2 style="font-size: 18px;color: #000;"><strong>Conatct Information</strong></h2>-->

						            <?php
						               } else {
										   echo '<div class="alert alert-warning">Teacher information not found.</div>';
									   }
						               } else {
										   echo '<div class="alert alert-warning">Teacher information not found.</div>';
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